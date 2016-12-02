<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 *
 * added/fixed in version 2.0.1
 * - added new field types Checkbox - List, Radio - List, Date, Emails, Contacts
 * - added mark_required_fields character
 * - added id attribute on div tags for each rows for a better control with css
 * - added the test for captcha activation to profile
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel view class of aiContactSafe
class AiContactSafeViewMessage extends AiContactSafeViewDefault {
	// fields to display into the contact form
	var $fields = null;
	// the contact form
	var $contact_form = null;
	// the contact informations
	var $contactinformations = null;
	// the profile informations
	var $profile = null;
	// the url to return the form on success
	var $return_to = null;
	// activate or deactivate the back button
	var $back_button = null;
	// display only the contact form ( for AJAX ) without buttons and captcha
	var $returnAjaxForm = false;

	// function to define the toolbar depending on the section
	function setToolbar() {
		// no toolbar here
	}

	// function to initialize the variables used in the template
	function setVariables() {
		JHTML::_('behavior.mootools');

		$pf = 0;
		$this->return_to = '';

		$uri = & JURI::getInstance();
		$test_return_to = $uri->toString( array('scheme', 'host', 'port', 'path', 'query', 'fragment'));
		// get the Itemid variable
		$menuItemid = JRequest::getInt( 'Itemid' );
		// get the menu variable
		$menu = JSite::getMenu();
		// read the parameters of the menu
		$menuparams = $menu->getParams( $menuItemid );
		$this->page_title = $menuparams->get( 'page_title' );
		$this->show_page_title = $menuparams->get( 'show_page_title' );
		$this->pageclass_sfx = $menuparams->get( 'pageclass_sfx' );

		// initialize the variable that will allow the use of the profile redirect on success
		$use_profile_redirect_on_success = false;

		// if the last send process ended up with an error
		if ($this->_app->_session->get( 'isOK:' . $this->_sTask ) === false) {
			$postData = $this->_app->_session->get( 'postData:' . $this->_sTask );
			$pf = $postData['pf'];
			$this->return_to = str_replace('&#38;','&',$postData['return_to']);
			$this->back_button = $postData['back_button'];
		} else {
			// if there is a menulink get the parameters from it
			if ($menuItemid) {
				$pf = $menuparams->get( 'pf' );
				$this->return_to = $menuparams->get( 'redirect_on_success' );
				$test_return_to = $menuparams->get( 'redirect_on_success' );
			}
			// if no profile is specified check for one specified in request
			if ($pf == 0) {
				$pf = JRequest::getVar('pf', 0, 'request', 'int');
			}
			// if no return link is defined check for one in the request variables
			if ( $this->return_to == '' ) {
				$this->return_to = str_replace('&#38;','&',JRequest::getVar('return_to', '', 'request', 'string'));
			}
			// if no return link is found generate one and record if the one in the profile can be used
			if ( $this->return_to == '' ) {
				$uri = & JURI::getInstance();
				$this->return_to = $uri->toString( array('scheme', 'host', 'port', 'path', 'query', 'fragment'));
				$test_return_to = $this->return_to;
				$use_profile_redirect_on_success = true;
			}
			// check if the back button will be used
			if ($this->return_to != '' && $this->return_to != $test_return_to) {
				$this->back_button = 1;
			} else {
				$this->back_button = 0;
			}
		}

		$model = $this->getModel();
		$this->profile = $model->getProfile($pf);
		if ($use_profile_redirect_on_success && strlen(trim($this->profile->redirect_on_success)) > 0) {
			$this->return_to = $this->profile->redirect_on_success;
		}
		$this->fields = $model->readFields( $this->profile );
		$this->fields = $this->generateHtmlFields( $this->fields );
		$this->contactinformations = $model->readContactInformations( $this->profile->id );

		// if the form is not called after a submit with ajax run all the content plugin on contact information
		if ( !$this->returnAjaxForm && $this->profile->plg_contact_info ) {
			$this->contactinformations['contact_info'] = JHTML::_('content.prepare',$this->contactinformations['contact_info']);
		}

		$doc =& JFactory::getDocument();
		if ( strlen($this->contactinformations['meta_description']) > 0 ) {
			$doc->setMetaData( 'description', $this->contactinformations['meta_description'] );
		}
		if ( strlen($this->contactinformations['meta_keywords']) > 0 ) {
			$doc->setMetaData( 'keywords', $this->contactinformations['meta_keywords'] );
		}

		if ($this->profile->use_ajax) {
			$this->buttons = '<div id="aiContactSafeSend"><input type="submit" id="aiContactSafeSendButton" value="' . JText::_( 'Send' ) . '" /></div>';
		} else {
			$this->buttons = '';
			if ($this->back_button) {
				$this->buttons .= '<div id="aiContactSafeBack"><input type="button" onclick="javascript:document.getElementById(\'send_mail\').value=2;document.adminForm.submit();" value="' . JText::_( 'Back' ) . '" /></div>';
			}
			$this->buttons .= '<div id="aiContactSafeSend"><input type="submit" id="aiContactSafeSendButton" value="' . JText::_( 'Send' ) . '" /></div>';
		}

		$language = JFactory::getLanguage();
		$lang = substr(trim($language->_lang),0,2);
		if ( strlen($lang) == 0 ) {
			$lang = 'en';
		}
		$uri =& JURI::getInstance();
		$urlCaptcha = JURI::base().'index.php?option=com_aicontactsafe&sTask=captcha&task=getNewCode&id=0&pj_id=0&pf='.$this->profile->id.'&lang='.$lang.'&format=raw&set_rand=';
		$script = "
			//<![CDATA[
			<!--
			function resetSubmit() {
				$('adminForm').addEvent('submit', function(e) {
					new Event(e).stop();
					this.send({
						update: $('displayAiContactSafeForm'),
						onRequest: function(){ 
												document.getElementById('task').value = 'ajaxform'; 
												document.getElementById('use_ajax').value = '1'; 
												document.getElementById('aiContactSafeSendButton').value = '".JText::_( 'Please wait ...' )."'; 
												document.getElementById('aiContactSafeSendButton').disabled = true;
											},
						onComplete: function() { 
												changeCaptcha(0); 
												document.getElementById('aiContactSafeSendButton').value = '".JText::_( 'Send' )."'; 
												document.getElementById('aiContactSafeSendButton').removeAttribute('disabled');
												if (document.getElementById('ajax_return_to')) {
													var ajax_return_to = document.getElementById('ajax_return_to').value;
													window.location = ajax_return_to;
												} else {
													if (document.getElementById('ajax_message_sent')) {
														var return_to = document.getElementById('return_to').value;
														return_to = return_to.replace('&#38;', '&');
														var current_url = document.getElementById('current_url').value;
														current_url = current_url.replace('&#38;', '&');
														if (return_to != current_url) {
															window.location = return_to;
														}
													}
												}
											}
					});
				});
			}
			function checkEditboxLimit( editbox_id, chars_limit ){
				if (document.getElementById(editbox_id)) {
					if (document.getElementById(editbox_id).value.length > chars_limit) {
						alert('".JText::_( 'Maximum characters exceeded' )." !');
						document.getElementById(editbox_id).value = document.getElementById(editbox_id).value.substring(0,chars_limit);
					} else {
						if (document.getElementById('countdown_'+editbox_id)) {
							document.getElementById('countdown_'+editbox_id).value = chars_limit - document.getElementById(editbox_id).value.length;
						}
					}
				}
			}
			function changeCaptcha(modifyFocus) {
				if (document.getElementById('div_captcha_img')) {
					var set_rand = Math.floor(Math.random()*10000000001);
					var url = '".$urlCaptcha."'+set_rand;
					new Ajax(url, {
						method: 'get',
						update: $('div_captcha_img'),
						onRequest: function(){ 
												$('div_captcha_img').setHTML('".JText::_( 'Please wait ...' )."');
												document.getElementById('captcha-code').value = '';
												if (modifyFocus) {
													document.getElementById('captcha-code').focus();
												}
											}
					}).request();
				}
			}
			function setDate( newDate, idDate ) {
				if (document.getElementById('day_'+idDate)) {
					document.getElementById('day_'+idDate).value = newDate.substr(8,2);
				}
				if (document.getElementById('month_'+idDate)) {
					var selMonth = newDate.substr(5,2);
					if(selMonth.substr(0,1) == '0') {
						selMonth = selMonth.substr(1,1);
					}
					selMonth = parseInt(selMonth) - 1;
					document.getElementById('month_'+idDate).options[selMonth].selected = true;
				}
				if (document.getElementById('year_'+idDate)) {
					document.getElementById('year_'+idDate).value = newDate.substr(0,4);
				}
			}
			function daysInFebruary( year ){
				var days = (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
				return days;
			}
			function daysInMonth( month, year ) {
				var days = 31;
				switch( true ) {
					case month == 2 :
						days = daysInFebruary( year );
						break;
					case month == 4 || month == 6 || month == 9 || month == 11 :
						days = 30;
						break;
				}
			   return days;
			}
			function checkDate( idDate ) {
				var year = 0;
				var month = 0;
				var day = 0;
				if (document.getElementById('year_'+idDate)) {
					year = document.getElementById('year_'+idDate).value;
				}
				if (document.getElementById('month_'+idDate)) {
					month = document.getElementById('month_'+idDate).value;
				}
				if (document.getElementById('day_'+idDate)) {
					day = document.getElementById('day_'+idDate).value;
				}
				if (day > 0 && month > 0 && year > 0) {
					var days = daysInMonth( month, year );
					if (day > days) {
						day = days;
						document.getElementById('day_'+idDate).value = days;
						var error = '" . JText::_( 'MAXIMUM_DAYS_IN_MONTH_ERROR' ) . "';
						alert( error.replace( '%days%', days ) );
					}
				}
				if (document.getElementById(idDate)) {
					document.getElementById(idDate).value = year+'-'+month+'-'+day;
				}
			}
			window.addEvent('domready', function() {
				changeCaptcha(0);\n".(($this->profile->use_ajax)?"resetSubmit();\n":"")."
			});
			//-->
			//]]>
		";

		$document =& JFactory::getDocument();
		$document->addScriptDeclaration($script);
	}

	// function to display the default template
	function viewDefault( $returnAjaxForm = false ) {
		// initialize $returnAjaxForm
		$this->returnAjaxForm = $returnAjaxForm;
		// add javascript
		$document =& JFactory::getDocument();
		$document->addScript( JURI::root(true).'/includes/js/joomla.javascript.js');
		// initialize the template variables
		$this->setVariables();
		// generate the css file name based on the profile
		$css_file = 'profile_css_'.$this->profile->id.'.css';
		// call the css file
		$this->callCssFile($css_file);
		// determine to what section to return to
		$this->setTaskReturn();

		echo '<div class="aiContactSafe" id="aiContactSafe_mainbody">';
		parent::display();
		echo '</div>';

		// reset the form fields after the form was displayed
		$model = &$this->getModel( $this->_sTask, '', $this->_parameters );
		$model->resetFormFields();
	}

	// function to generate the header of the template to display
	function getTmplHeader() {
		$header = '<form action="index.php" method="post" id="adminForm" name="adminForm" enctype="multipart/form-data">';
		return $header;
	}

	// function to generate the footer of the template to display
	function getTmplFooter() {
		$footer = '';
		$footer .= '<input type="hidden" id="option" name="option" value="com_aicontactsafe" />';
		$footer .= '<input type="hidden" id="sTask" name="sTask" value="' . $this->_sTask . '" />';
		$footer .= '<input type="hidden" id="task" name="task" value="' . $this->_task . '" />';
		$footer .= '<input type="hidden" id="send_mail" name="send_mail" value="1" />';
		$footer .= '<input type="hidden" id="pf" name="pf" value="'.$this->profile->id.'" />';
		$return_to = str_replace('&','&#38;',$this->return_to);
		$footer .= '<input type="hidden" id="return_to" name="return_to" value="'.$return_to.'" />';
		$uri = & JURI::getInstance();
		$current_url = str_replace('&','&#38;',$uri->toString( array('scheme', 'host', 'port', 'path', 'query', 'fragment')));
		$footer .= '<input type="hidden" id="current_url" name="current_url" value="'.$current_url.'" />';
		$Itemid = JRequest::getInt( 'Itemid' );
		$footer .= '<input type="hidden" id="Itemid" name="Itemid" value="'.$Itemid.'" />';
		$footer .= '<input type="hidden" id="back_button" name="back_button" value="'.$this->back_button.'" />';
		$footer .= '<input type="hidden" id="boxchecked" name="boxchecked" value="0" />';
		$footer .= '<input type="hidden" id="use_ajax" name="use_ajax" value="'.$this->profile->use_ajax.'" />';
		$footer .= JHTML::_( 'form.token' );
		$footer .= '</form>';

		// display the version of aiContactSafe
		$veraicontactsafe = JRequest::getVar('veraicontactsafe', 0, 'request', 'int');
		if ($veraicontactsafe) {
			$footer .= '<br clear="all" /><div id="veraicontactsafe">aiContactSafe version : '.$this->_version.'</div><br clear="all" />';
		}

		return $footer;
	}

	// function to generate the html tags for each field type
	function generateHtmlFields( $fields = null ) {
		// initialize the model
		$model = &$this->getModel();
		// check if the fields were read from the database
		if(!$fields) {
			$fields = $this->fields;
		}
		if(!$fields) {
			$this->fields = $model->readFields( $this->profile );
			$fields = $this->fields;
		}

		// get the information entered into the contact form if an error has occured, or generate the default values to use on the form
		$postData = null;
		if ($this->_app->_session->get( 'isOK:' . $this->_sTask ) === false) {
			$postData = $this->_app->_session->get( 'postData:' . $this->_sTask );
		}
		// initialize the script for checkbox group only once
		$checkbox_group_script_not_initialized = true;
		// initialize the db for contacts only once
		$contacts_db_not_initialized = true;

		// get user informations
		if ($this->_user_id > 0) {
			$user = & JFactory::getUser();
			$joomla_user_name = $user->get('name');
			$joomla_user_email = $user->get('email');
		}

		// initialize the form
		foreach($fields as $field_key=>$field) {
			$field->html_tag = '';
			$field->field_label = $this->revert_specialchars($field->field_label);
			$field->label_parameters = $this->revert_specialchars($field->label_parameters);
			$field->field_parameters = $this->revert_specialchars($field->field_parameters);
			$postData_field_value = null;
			if ($this->_user_id > 0 && strlen(trim($field->auto_fill)) > 0) {
				switch($field->auto_fill) {
					case 'UN' :
						$postData_field_value = $joomla_user_name;
						break;
					case 'UE' :
						$postData_field_value = $joomla_user_email;
						break;
				}
			}
			if (is_null($postData_field_value)) {
				$postData_field_value = $field->default_value;
			}
			if (is_array($postData) && array_key_exists($field->name, $postData)) {
				$postData_field_value = $postData[$field->name];
				if (is_array($postData_field_value)) {
					$postData_field_value = implode(';',$postData_field_value);
				}
			}
			switch($field->field_type) {
				case 'TX' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					$maxlength = '';
					if (substr_count(strtolower($field->field_parameters), 'maxlength') == 0 && $field->field_limit > 0) {
						$maxlength = 'maxlength="'.$field->field_limit.'"';
					}
					$field->html_tag = '<input type="text" name="' . $field->name . '" id="' . $field->name . '" ' . $maxlength . ' ' . $field->field_parameters . ' value="' . $postData_field_value . '" />';
					break;
				case 'CK' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					$field->html_tag = '<input type="checkbox" name="' . $field->name . '" id="' . $field->name . '" ' . $field->field_parameters . ' ' . ($postData_field_value?'checked="checked"':'') . ' />';
					break;
				case 'CB' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					$field_values = split(';',$field->field_values);
					// generate the array with the combovalues
					$select_combo = array();
					foreach($field_values as $id => $combo_value) {
						$txtSelect = new stdClass;
						$txtSelect->name = $combo_value;
						$txtSelect->id = $id;
						$select_combo[] = $txtSelect;
					}
					// generate the html tag
					$field->html_tag = JHTML::_('select.genericlist', $select_combo, $field->name, $field->field_parameters, 'id', 'name', $postData_field_value, false, false);
					break;
				case 'ED' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					$cols = '';
					if (substr_count(strtolower($field->field_parameters), 'cols') == 0) {
						$cols = 'cols="'.$this->_config_values['editbox_cols'].'"';
					}
					$rows = '';
					if (substr_count(strtolower($field->field_parameters), 'rows') == 0) {
						$rows = 'rows="'.$this->_config_values['editbox_rows'].'"';
					}
					if ($field->field_limit > 0) {
						$field->html_tag = '<textarea name="' . $field->name . '" id="' . $field->name . '" ' . $cols . ' ' . $rows . ' ' . $field->field_parameters . ' onkeydown="checkEditboxLimit(\''.$field->name.'\', '.$field->field_limit.')" onkeyup="checkEditboxLimit(\''.$field->name.'\','.$field->field_limit.')" onchange="checkEditboxLimit(\''.$field->name.'\','.$field->field_limit.')">' . html_entity_decode($postData_field_value, ENT_QUOTES) . '</textarea>';
						$field->html_tag .= '<br />';
						$field->html_tag .= '<div class="countdown_div">' . JText::_( 'Maximum characters' ) . ': '.$field->field_limit.'. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' . JText::_( 'You have' ) . ' <input type="text" readonly="readonly" class="countdown_editbox" name="countdown_'.$field->name.'" id="countdown_'.$field->name.'" size="4" value="'.$field->field_limit.'" /> ' . JText::_( 'characters left' ) . '.</div>';
					} else {
						$field->html_tag = '<textarea name="' . $field->name . '" id="' . $field->name . '" ' . $cols . ' ' . $rows . ' ' . $field->field_parameters . '>' . html_entity_decode($postData_field_value, ENT_QUOTES) . '</textarea>';
					}
					break;
				case 'CL' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</span>';
					if ($checkbox_group_script_not_initialized) {
						$script = "
							//<![CDATA[
							<!--
							function clickCheckBox(idTag, ckChecked) {
								document.getElementById(idTag).value = ckChecked?1:0;
							}
							//-->
							//]]>
							";
						$document =& JFactory::getDocument();
						$document->addScriptDeclaration($script);
						$checkbox_group_script_not_initialized = false;
					}
					$field_values = split(';',$field->field_values);
					$count_values = count($field_values);
					if ((int)strpos($postData_field_value, ';') > 0) {
						$postData_field_value = split(';',$postData_field_value);
					}
					for($i=0;$i<$count_values;$i++) {
						if (is_array($postData_field_value)) {
							$postDataValue = $postData_field_value[$i];
						} else {
							$postDataValue = 0;
						}
						$field->html_tag .= '<div id="div_' . $field->name . $i . '" class="' . $field->name . '" ' . $field->field_parameters . '>';
						$field->html_tag .= '<input type="checkbox" id="' . $field->name . '_chk_' . $i . '" onchange="clickCheckBox(\'' . $field->name . $i . '\',this.checked)" ' . $field->field_parameters . ' ' . ($postDataValue?'checked="checked"':'') . ' />';
						$field->html_tag .= '<input type="hidden" value="' . $postDataValue . '" id="' . $field->name . $i . '" name="' . $field->name . '[]" />&nbsp;<label for="' . $field->name . '_chk_' . $i . '">' . $field_values[$i] . '</label></div>';
					}
					break;
				case 'RL' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</span>';
					$field_values = split(';',$field->field_values);
					$count_values = count($field_values);
					for($i=0;$i<$count_values;$i++) {
						$field->html_tag .= '<div id="div_' . $field->name . $i . '" class="' . $field->name . '" ' . $field->field_parameters . '><input type="radio" id="' . $field->name . $i . '" name="' . $field->name . '" value="' . $field_values[$i] . '" '.($postData_field_value == $field_values[$i]?'checked="checked"':'').' /><label for="' . $field->name . $i . '">&nbsp;' . $field_values[$i] . '</label></div>';
					}
					break;
				case 'DT' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					if ($postData_field_value) {
						$postDataValue = $postData_field_value;
					} else {
						$postDataValue = date('Y-m-d');
					}
					$year = substr($postDataValue,0,4);
					$month = substr($postDataValue,5,2);
					$day = substr($postDataValue,8,2);

					// generate the day combo
					$select_day = '<select name="day_' . $field->name . '" id="day_' . $field->name . '" onchange="checkDate(\'' . $field->name . '\')" >';
					for($i = 1; $i<=31; $i++) {
						$select_day .= '<option value="' . str_pad($i, 2, "0", STR_PAD_LEFT) . '" ' . (( str_pad($i, 2, "0", STR_PAD_LEFT) == $day )?'selected="selected"':'') . '>' . str_pad($i, 2, "0", STR_PAD_LEFT) . '</option>';
					}
					$select_day .= '</select>';
					// generate the month combo
					$select_month = '<select name="month_' . $field->name . '" id="month_' . $field->name . '" onchange="checkDate(\'' . $field->name . '\')" >';
					for($i = 1; $i<=12; $i++) {
						$select_month .= '<option value="' . str_pad($i, 2, "0", STR_PAD_LEFT) . '" ' . (( str_pad($i, 2, "0", STR_PAD_LEFT) == $month )?'selected="selected"':'') . '>' . $model->getMonth($i) . '</option>';
					}
					$select_month .= '</select>';
					// generate the year combo
					$select_year = '<select name="year_' . $field->name . '" id="year_' . $field->name . '" onchange="checkDate(\'' . $field->name . '\')" >';
					$year_min = (int)$year - $this->profile->custom_date_years_back;
					$year_max = (int)$year + $this->profile->custom_date_years_forward;
					for($i = $year_min; $i<=$year_max; $i++) {
						$select_year .= '<option value="' . str_pad($i, 4, "0", STR_PAD_LEFT) . '" ' . (( str_pad($i, 4, "0", STR_PAD_LEFT) == $year )?'selected="selected"':'') . '>' . str_pad($i, 4, "0", STR_PAD_LEFT) . '</option>';
					}
					$select_year .= '</select>';

					$field->html_tag .= '<div id="div_' . $field->name . '" class="' . $field->name . '" ' . $field->field_parameters . '>';
					switch( $this->profile->custom_date_format ) {
						case 'mdy':
							$field->html_tag .= $select_month . $select_day . $select_year;
							break;
						case 'ymd':
							$field->html_tag .= $select_year . $select_month . $select_day;
							break;
						case 'dmy':
						default :
							$field->html_tag .= $select_day . $select_month . $select_year;
							break;
					}
					$field->html_tag .= JHTML::_('calendar', $postDataValue, $field->name, $field->name, '%Y-%m-%d', array('class'=>'inputbox', 'size'=>'1', 'onchange'=>'setDate(this.value,\'' . $field->name . '\')', 'style'=>'width:1px;visibility:hidden;'));
					$field->html_tag .= '</div>';
					break;
				case 'EM' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					$maxlength = '';
					if (substr_count(strtolower($field->field_parameters), 'maxlength') == 0 && $field->field_limit > 0) {
						$maxlength = 'maxlength="'.$field->field_limit.'"';
					}
					$field->html_tag = '<input type="text" name="' . $field->name . '" id="' . $field->name . '" ' . $maxlength . ' ' . $field->field_parameters . ' value="' . $postData_field_value . '" />';
					break;
				case 'EL' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					$field_values = split(';',$field->field_values);
					// generate the array with the combovalues
					$select_combo = array();
					foreach($field_values as $id => $combo_value) {
						if (strlen($combo_value) > 0) {
							$combo_value = substr($combo_value, 0, strpos($combo_value,':'));
							$txtSelect = new stdClass;
							$txtSelect->name = $combo_value;
							$txtSelect->id = $id;
							$select_combo[] = $txtSelect;
						}
					}
					// generate the html tag
					if (count($select_combo) == 0) {
						$field->html_tag = '<font color="red">' . JText::_( 'No data available !' ) . '</font>';
					} else {
						$field->html_tag = JHTML::_('select.genericlist', $select_combo, $field->name, $field->field_parameters, 'id', 'name', $postData_field_value, false, false);
					}
					break;
				case 'JC' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					if ($contacts_db_not_initialized) {
						// initialize different variables
						$db = & JFactory::getDBO();
						$contacts_db_not_initialized = false;
					}
					$query = 'SELECT name, id FROM #__contact_details WHERE published = 1 ORDER BY name';
					$db->setQuery($query);
					$select_contacts = $db->loadObjectList();
					// generate the html tag
					if (count($select_contacts) == 0) {
						$field->html_tag = '<font color="red">' . JText::_( 'No data available !' ) . '</font>';
					} else {
						$field->html_tag = JHTML::_('select.genericlist', $select_contacts, $field->name, $field->field_parameters, 'id', 'name', $postData_field_value, false, false);
					}
					break;
				case 'JU' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					if ($contacts_db_not_initialized) {
						// initialize different variables
						$db = & JFactory::getDBO();
						$contacts_db_not_initialized = false;
					}
					$query = 'SELECT name, id FROM #__users WHERE block = 0 ORDER BY name';
					$db->setQuery($query);
					$select_users = $db->loadObjectList();
					// generate the html tag
					if (count($select_users) == 0) {
						$field->html_tag = '<font color="red">' . JText::_( 'No data available !' ) . '</font>';
					} else {
						$field->html_tag = JHTML::_('select.genericlist', $select_users, $field->name, $field->field_parameters, 'id', 'name', $postData_field_value, false, false);
					}
					break;
				case 'SB' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					if ($contacts_db_not_initialized) {
						// initialize different variables
						$db = & JFactory::getDBO();
						$contacts_db_not_initialized = false;
					}
					$query = 'SELECT title, itemid FROM #__sobi2_item WHERE published = 1 AND approved = 1 ORDER BY title';
					$db->setQuery($query);
					$select_sobi = $db->loadObjectList();
					// generate the html tag
					if (count($select_sobi) == 0) {
						$field->html_tag = '<font color="red">' . JText::_( 'No data available !' ) . '</font>';
					} else {
						$field->html_tag = JHTML::_('select.genericlist', $select_sobi, $field->name, $field->field_parameters, 'itemid', 'title', $postData_field_value, false, false);
					}
					break;
				case 'HD' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</span>';
					if (is_array($postData)) {
						$postDataValue = htmlentities($postData_field_value, ENT_QUOTES);
					} else {
						$postDataValue = htmlentities($field->field_values, ENT_QUOTES);
					}
					$field->html_tag = '<input type="hidden" name="' . $field->name . '" id="' . $field->name . '" ' . $field->field_parameters . ' value="' . $postDataValue . '" />';
					break;
				case 'SP' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</span>';
					if (is_array($postData)) {
						$postDataValue = $postData_field_value;
					} else {
						$postDataValue = $field->field_values;
					}
					$hiddenValue = htmlentities($postDataValue, ENT_QUOTES);
					$field->html_tag = '<div id="sp_' . $field->name . '" ' . $field->field_parameters . '>' . $postDataValue . '<input type="hidden" name="' . $field->name . '" id="' . $field->name . '" ' . $field->field_parameters . ' value="' . $hiddenValue . '" /></div>';
					break;
				case 'FL' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					$field->html_tag = '<input type="file" name="' . $field->name . '" id="' . $field->name . '" ' . $field->field_parameters . ' />';
					break;
				case 'NO' :
					$field->html_label = '<span class="aiContactSafe_label" id="aiContactSafe_label_' . $field->name . '" ' . $field->label_parameters . '><label for="' . $field->name . '" ' . $field->label_parameters . '>' . $field->field_label . '</label></span>';
					$maxlength = '';
					if (substr_count(strtolower($field->field_parameters), 'maxlength') == 0 && $field->field_limit > 0) {
						$maxlength = 'maxlength="'.$field->field_limit.'"';
					}
					$field->html_tag = '<input type="text" name="' . $field->name . '" id="' . $field->name . '" ' . $maxlength . ' ' . $field->field_parameters . ' value="' . $postData_field_value . '" />';
					break;
			}
			$fields[$field_key] = $field;
		}

		return $fields;
	}

	// function to call the css file used with this view
	function callCssFile($cssFile = '') {
		// check if css is activated/deactivated in control_panel
		$use_css = $this->profile->use_message_css;
		// if no cssFile is named call the default one of the class
		if (strlen($cssFile) == 0) {
			$cssFile = $this->_cssFile;
		}
		// if css is activated and there is a css file to call, continue the function
		if ($use_css && strlen($cssFile) > 0) {
			// get the folders where to look for the css file
			// the folder in the general templates or the folder of the component
			$templates = $this->_path['template'];
			$nameCssFile = '';
			$nameCssGeneral = str_replace(JPATH_SITE.DS,JURI::root(),JPATH_COMPONENT.DS.'includes'.DS.'css'.DS.'aicontactsafe_general.css');
			$nameCssGeneral = str_replace(DS,'/',$nameCssGeneral);
			if (count($templates) > 0) {
				// import joomla clases to manage file system
				jimport('joomla.filesystem.file');
				// check one by one each forlder for the css file
				foreach($templates as $template) {
					$nameCssFile = $template.$cssFile;
					// if the file is found, stop looking and replace the server path with the url path
					if (JFile::exists( $nameCssFile )) {
						$css_code = JFile::read($nameCssFile);
						if (strlen($css_code) > 0) {
							$nameCssFile = str_replace(JPATH_SITE.DS,JURI::root(),$nameCssFile);
							$nameCssFile = str_replace(DS,'/',$nameCssFile);
						}
						break;
					}
				}
			}

			$document =& JFactory::getDocument();
			// if a css file was found, call it
			if (strlen($nameCssGeneral) > 0) {
				$document->addStyleSheet($nameCssGeneral);
			}
			if (strlen($nameCssFile) > 0) {
				$document->addStyleSheet($nameCssFile);
			}
		}
	}

	// function to generate captcha code
	function writeCaptcha() {
		// if captcha is activated, generate the image
		if ($this->profile->use_captcha == 1 || ($this->profile->use_captcha == 2 && $this->_user_id == 0)) {
			$captcha_info = JText::_( 'Please enter the following security code' ) . ':';
			$change_image = JText::_( 'Not readable? Change text.' );
			?>
			<div id="div_captcha">
				<div id="div_captcha_info"><?php echo $captcha_info; ?></div>
				<div id="div_captcha_img" style="width:<?php echo $this->profile->captcha_width; ?>px;height:<?php echo $this->profile->captcha_height; ?>px;">...</div>
				<div id="div_captcha_new">
					<a href="javascript:void(0);" onclick="changeCaptcha(1);"
						id="change-image"><?php echo $change_image; ?></a>
				</div>
				<div style="margin-top:5px;" id="div_captcha_code"><input type="text" name="captcha-code" id="captcha-code" /></div>
			</div>
			<?php
		}
	}

}

?>

