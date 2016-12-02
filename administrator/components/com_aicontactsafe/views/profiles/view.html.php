<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel view class of aiContactSafe
class AiContactSafeViewProfiles extends AiContactSafeViewDefault {

	// construct function, it will iniaize the class variables
	function __construct( $default = array() )	{
		switch(true) {
			case $default['_task'] == 'display' :
				$this->_help_id = 'profiles_display';
				break;
			case $default['_task'] == 'add' :
				$this->_help_id = 'profiles_edit';
				break;
			case $default['_task'] == 'edit' :
				$this->_help_id = 'profiles_edit';
				break;
			case $default['_task'] == 'delete' :
				$this->_help_id = 'profiles_delete';
				break;
			default :
				$this->_help_id = 'profiles_display';
		}

		parent::__construct( $default );
	}

	// function to initialize the variables used in the template
	function setVariables() {
		parent::setVariables();
		if ( $this->_task == 'add' ) {
			$this->use_message_css = 1;
			$this->use_captcha = 1;
			$this->captcha_width = 400;
			$this->captcha_height = 55;
			$this->captcha_bgcolor = '#FFFFFF';
			$this->captcha_colors = '#FF0000;#00FF00;#0000FF';
			$this->always_send_to_email_address = 1;
			$this->record_message = 1;
			$this->custom_date_format = 'dmy';
			$this->custom_date_years_back = 80;
			$this->custom_date_years_forward = 0;
			$this->required_field_mark = '*';
			$this->display_format = 2;
			$this->published = 1;
			$this->contact_info = '<img style="margin-left: 10px; float: right;" alt="articles" src="images/stories/articles.jpg" width="128" height="96" /><div style="width: 150px; float: left;">Algis Info SRL<br />Str. Harmanului Nr.63<br />bl.1A sc.A ap.8<br />Brasov, Romania<br />500232<br /><a target="_blank" href="http://www.algisinfo.com/">www.algisinfo.com</a></div>';
			$this->meta_description = '';
			$this->meta_keywords = '';
			$this->thank_you_message = 'Email sent. Thank you for your message.';
			$this->all_fields = 1;
		}
		if ( $this->_task == 'edit' ) {
			$this->getContactInformation( $this->id );
			$this->all_fields = ($this->active_fields == 0)?1:0;
		}
		if ( $this->_task == 'add' or $this->_task == 'edit' ) {
			// generate the use captcha combo
			$use_captcha = array();
			// dmy
			$txtSelect = new stdClass;
			$txtSelect->name = JText::_( 'Only for unregistered users' );
			$txtSelect->type = '2';
			$use_captcha[] = $txtSelect;
			// mdy
			$txtSelect = new stdClass;
			$txtSelect->name = JText::_( 'Always' );
			$txtSelect->type = '1';
			$use_captcha[] = $txtSelect;
			// ymd
			$txtSelect = new stdClass;
			$txtSelect->name = JText::_( 'Never' );
			$txtSelect->type = '0';
			$use_captcha[] = $txtSelect;
			// generate the combobox
			$this->comboUseCaptcha = JHTML::_('select.genericlist',  $use_captcha, 'use_captcha', 'class="inputbox" size="1"', 'type', 'name', $this->use_captcha, false, false);

			// generate the email_mode combo
			$email_mode = array();
			// plain text
			$txtSelect = new stdClass;
			$txtSelect->name = JText::_( 'Plain text' );
			$txtSelect->id = '0';
			$email_mode[] = $txtSelect;
			// html
			$txtSelect = new stdClass;
			$txtSelect->name = JText::_( 'HTML' );
			$txtSelect->id = '1';
			$email_mode[] = $txtSelect;
			// generate the combobox
			$this->comboEmail_mode = JHTML::_('select.genericlist',  $email_mode, 'email_mode', 'class="inputbox" size="1"', 'id', 'name', $this->email_mode, false, false);

			// generate the custom_date_format
			$custom_date_format = array();
			// dmy
			$txtSelect = new stdClass;
			$txtSelect->name = JText::_( 'Day-Month-Year' );
			$txtSelect->type = 'dmy';
			$custom_date_format[] = $txtSelect;
			// mdy
			$txtSelect = new stdClass;
			$txtSelect->name = JText::_( 'Month-Day-Year' );
			$txtSelect->type = 'mdy';
			$custom_date_format[] = $txtSelect;
			// ymd
			$txtSelect = new stdClass;
			$txtSelect->name = JText::_( 'Year-Month-Day' );
			$txtSelect->type = 'ymd';
			$custom_date_format[] = $txtSelect;
			// generate the combobox
			$this->comboField_custom_date_format = JHTML::_('select.genericlist',  $custom_date_format, 'custom_date_format', 'class="inputbox" size="1"', 'type', 'name', $this->custom_date_format, false, false);

			$model = &$this->getModel();

			// read the profile's css code
			$this->profile_css_code = $model->readProfileCssFile( $this->id );

			$field_types = array('TX','CB','RL','DT','EM','EL','JC','JU','SB','HD','NO');
			$this->comboField_name = $this->selectField($this->name_field_id, $field_types, 'name_field_id', 5);
			$field_types = array('EM','EL','JC','JU','SB','HE');
			$this->comboField_email = $this->selectField($this->email_field_id, $field_types, 'email_field_id', 5);
			$field_types = array('TX','CB','RL','DT','EM','EL','JC','JU','SB','HD','NO');
			$this->comboField_subject = $this->selectField($this->subject_field_id, $field_types, 'subject_field_id', 5);
			$field_types = array('CK');
			$this->comboField_send_to_sender = $this->selectField($this->send_to_sender_field_id, $field_types, 'send_to_sender_field_id', 5);

			$this->selected_fields_info = '&nbsp;&nbsp;&nbsp;<font color="#FF0000">' . JText::_( 'This field has to be selected in the fields list below unless the default value is selected !' ) . '</font>';

			$this->select_fields = $model->getFields( $this->active_fields );
		}
	}

	// function to get the contact informations of the current profile
	function getContactInformation( $profile_id = 0 ) {
		$model = &$this->getModel();
		$contact_info = $model->getContactInformation( $profile_id );
		
		$this->contact_info = $contact_info['contact_info'];
		$this->meta_description = $contact_info['meta_description'];
		$this->meta_keywords = $contact_info['meta_keywords'];
		$this->thank_you_message = $contact_info['thank_you_message'];
	}

	// function to generate the html code to select a field
	function selectField( $id = 0, $field_types = array(), $html_name = 'select_field', $addSelect = 1, $onlyPublished = 0, $html_params = 'class="inputbox" size="1"', $key = 'id', $text = 'name', $idtag = false, $translate = true ) {
		$db = & JFactory::getDBO();
		$query_condition = '';
		if ($onlyPublished) {
			$query_condition = ' where published = 1 ';
		} else {
			$query_condition = ' where 1 ';
		}
		if (count($field_types) > 0) {
			$query_condition .= ' and field_type IN ( \''.implode('\',\'', $field_types).'\' )';
		}
		$query = 'SELECT CONCAT(TRIM(name),\' - \',TRIM(field_label)) as ' . $text . ', id as ' . $key . ' FROM #__aicontactsafe_fields ' . $query_condition . ' ORDER BY ' . $text;
		$db->setQuery($query);
		$select_combo = $db->loadObjectList();
		if ($addSelect > 0) {
			$txtSelect = new stdClass;
			$txtSelect->$text = $this->setSelectText($addSelect);
			$txtSelect->$key = 0;
			array_unshift($select_combo, $txtSelect);
		}
		$html_select_combo = JHTML::_('select.genericlist',  $select_combo, $html_name, $html_params, $key, $text, $id, $idtag, $translate);

		return $html_select_combo;
	}

}

?>
