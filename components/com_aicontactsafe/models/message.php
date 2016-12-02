<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 *
 * added/fixed in version 2.0.1
 * - added new field types Checkbox - List, Radio - List, Date, Emails, Contacts
 * - check if an email of contact custom field is used and if the message should be sent to default email or not
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel model class of aiContactSafe
class AiContactSafeModelMessage extends AiContactSafeModelDefault {
	// fields to display into the contact form
	var $fields = null;
	// the contact informations
	var $contactinformations = null;

	// function to read the fields to display into the contact form
	function readFields( $profile = null ) {
		if(!$this->fields) {
			// initialize the database
			$db = &JFactory::getDBO();
	
			// get the fields to display
			if ( $profile->active_fields == 0 ) {
				$query = 'SELECT * FROM #__aicontactsafe_fields WHERE published = 1 ORDER by ordering';
			} else {
				$query = 'SELECT * FROM #__aicontactsafe_fields WHERE published = 1 and id IN ( ' . $profile->active_fields . ' ) ORDER by ordering';
			}
			$db->setQuery( $query );
			$this->fields = $db->loadObjectList();
		}
		return $this->fields;
	}

	// function to read the contact informations
	function readContactInformations( $profile_id = 0) {
		if(!$this->contactinformations) {
			// initialize the database
			$db = &JFactory::getDBO();
	
			// get the fields to display
			$query = 'SELECT * FROM #__aicontactsafe_contactinformations WHERE PROFILE_ID = '.$profile_id;
			$db->setQuery( $query );
			$contactinformations = $db->loadObjectList();
			$this->contactinformations = array();
			foreach($contactinformations as $info) {
				$this->contactinformations[$info->info_key] = $this->revert_specialchars($info->info_value);
			}
		}
		// set the thank you message
		$this->_app->_session->set( 'confirmationMessage:' . $this->_sTask, $this->contactinformations['thank_you_message'] );

		return $this->contactinformations;
	}

	// function to protect against different security threats
	function securityCheck($postData) {
		$postData = parent::securityCheck($postData);

		// import joomla clases to manage file system
		jimport('joomla.filesystem.path');
		jimport('joomla.filesystem.file');

		// get the requested profile id
		$pf = $postData['pf'];
		$profile = $this->getProfile( $pf );

		// get the list of the fields from the contact form
		$fields = $this->readFields( $profile );
		// check if all required fields are completed
		$isOK = true;
		// record rquired fields uncompleted
		$empty_required_fields = '';
		// record invalid email fields
		$invalid_email_fields = '';
		// record limit excede fields
		$limit_exceded_fields = '';
		// record invalid number fields
		$invalid_number_fields = '';
		// record invalid format file
		$invalid_format_file = '';
		// record files to bit
		$files_to_big = '';
		// check each field
		foreach($fields as $field) {
			$field->field_label = $this->revert_specialchars($field->field_label);
			// check if the field is required
			$isOKfield = true;
			if ($field->field_required && strlen($postData[$field->name]) == 0) {
				// if the field is required check if it's a file
				if ($field->field_type == 'FL') {
					$file = JRequest::getVar( $field->name, 'post', 'files', 'array' );
					if ( strlen(trim($file['name'])) == 0 ) {
						$isOKfield = false;
					}
				} else {
					$isOKfield = false;
				}
			}
			if (!$isOKfield) {
				$isOK = false;
				$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
				if (strlen($empty_required_fields) > 0) {
					$empty_required_fields .= ', ';
				}
				$empty_required_fields .= $field->field_label;
				$this->_app->_session->set( 'errorMsg:' . $this->_sTask, JText::_( 'Please enter all required fields !' ) . ' ( ' . $empty_required_fields . ' ) ' );
			}
			if ($field->field_type == 'EM' && strlen($postData[$field->name]) > 0) {
				if (!$this->validateEmail($postData[$field->name])) {
					$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
					if (strlen($invalid_email_fields) > 0) {
						$invalid_email_fields .= ', ';
					}
					$invalid_email_fields .= $field->field_label;
					$this->_app->_session->set( 'errorMsg:' . $this->_sTask, JText::_( 'Please enter a valid email address !' ) . ' ( ' . $invalid_email_fields . ' ) ' );
				}
			}
			if ($field->field_type == 'ED' || $field->field_type == 'HD') {
				$field_value = JRequest::getVar($field->name, '', 'post', 'string', JREQUEST_ALLOWRAW);
				$postData[$field->name] = $field_value;
			}
			if ($field->field_type == 'TX' || $field->field_type == 'ED' || $field->field_type == 'ED') {
				if ($field->field_limit > 0 && strlen($postData[$field->name]) > $field->field_limit) {
					$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
					if (strlen($limit_exceded_fields) > 0) {
						$limit_exceded_fields .= ', ';
					}
					$limit_exceded_fields .= $field->field_label;
					$this->_app->_session->set( 'errorMsg:' . $this->_sTask, JText::_( 'Maximum characters exceeded !' ) . ' ( ' . $limit_exceded_fields . ' ) ' );
				}
			}
			if ($field->field_type == 'NO' && !is_numeric($postData[$field->name])) {
				$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
				if (strlen($invalid_number_fields) > 0) {
					$invalid_number_fields .= ', ';
				}
				$invalid_number_fields .= $field->field_label;
				$this->_app->_session->set( 'errorMsg:' . $this->_sTask, JText::_( 'Please enter a valid number !' ) . ' ( ' . $invalid_number_fields . ' ) '  );
			}
			if ($field->field_type == 'FL') {
				$file = JRequest::getVar( $field->name, 'post', 'files', 'array' );
				if ( strlen(trim($file['name'])) > 0 ) {
					$format = strtolower(JFile::getExt($file['name']));
					$allowable = explode( ',', $this->_config_values['attachments_types']);
					if (!in_array($format, $allowable)) {
						$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
						if (strlen($invalid_format_file) > 0) {
							$invalid_format_file .= ', ';
						}
						$invalid_format_file .= $format;
						$this->_app->_session->set( 'errorMsg:' . $this->_sTask, JText::_( 'This type of attachement is not allowed !' ).' ( '.$invalid_format_file.' ) ' );
					} else {
						$maxSize = (int) $this->_config_values['maximum_size'];
						if ($maxSize > 0 && (int) $file['size'] > $maxSize) {
							$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
							if (strlen($files_to_big) > 0) {
								$files_to_big .= ', ';
							}
							$files_to_big .= JFile::getName($file['name']);
							$this->_app->_session->set( 'errorMsg:' . $this->_sTask, JText::_( 'File to big !' ).' ( '.$files_to_big.' ) ' );
						}
					}
				}
			}
		}
		// test for captcha
		if ( $isOK ) {
			if ($profile->use_captcha == 1 || ($profile->use_captcha == 2 && $this->_user_id == 0)) {
				$session =& JFactory::getSession();
				$captcha_code = $session->get( 'captcha_code' );
				if ($captcha_code != $postData['captcha-code'] || strlen($postData['captcha-code']) == 0) {
					$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
					$this->_app->_session->set( 'errorMsg:' . $this->_sTask, JText::_( 'Security code is not correct !' ) );
				}
			}
		}

		return $postData;
	}

	// function to validate fields before writing them to the database
	function checkBeforeWrite($postData) {
		$postData = parent::checkBeforeWrite($postData);

		$postData['date_added'] = date( 'Y-m-d H:i:s' );
		$postData['last_update'] = date( 'Y-m-d H:i:s' );

		return $postData;
	}

	// function to determin the next link to redirect the page
	function getReturnLink($new_values = array(), $use_ajax = 0) {
		if ($use_ajax) {
			$link == '';
		} else {
			// check for a request to return to a specified web page
			$link = JRequest::getVar('return_to', '', 'return_to', 'string');
		}
		// if no link was specified, generate one
		if ( $link == '' ) {
			// read the registered return task
			$return_task = $this->_app->_session->get( 'return_task:' . $this->_sTask );
			// force the return_task variable to be an array
			if (!is_array($return_task)) {
				$return_task = array();
			}
			// make sure the profile is in the link
			$pf_added = false;
			// if ajax is used tmpl=component has to be added
			if ($use_ajax) {
				$new_values['task'] = 'ajaxform';
				$new_values['format'] = 'raw';
				$new_values['use_ajax'] = '1';
			} else {
				$new_values['task'] = 'display';
			}
			// make sure Itemid is added
			$Itemid = JRequest::getInt( 'Itemid' );
			if ( $Itemid > 0 ) {
				$new_values['Itemid'] = $Itemid;
			}
			// add/modify the values from last_task to new_values
			foreach($new_values as $par_key => $par_value) {
				$return_task[$par_key] = $par_value;
				if ($par_key == 'pf') {
					$pf_added = true;
				}
			}
			// if the profile is not added, add it
			if (!$pf_added) {
				$pf = JRequest::getVar('pf', 0, 'request', 'int');
				$return_task['pf'] = $pf;
			}
			// generate the link
			$link = 'index.php?option=com_aicontactsafe';
			foreach($return_task as $par_key => $par_value) {
				$link .= '&' . $par_key . '=' . $par_value;
			}
			// make the link seo frindly only for the frontend
			if ($this->_sef == 1 && $this->_backend == 0) {
				$link = JRoute::_($link);
			}
		}
		return $link;
	}

	// function to determin the link of the last visited page
	function getLastLink($new_values = array(), $use_ajax = 0) {
		// read the registered last task
		$last_task = $this->_app->_session->get( 'last_task' );
		// force the last_task variable to be an array
		if (!is_array($last_task)) {
			$last_task = array();
		}
		// if ajax is used tmpl=component has to be added
		if ($use_ajax) {
			$new_values['task'] = 'ajaxform';
			$new_values['format'] = 'raw';
			$new_values['use_ajax'] = '1';
		} else {
			$new_values['task'] = 'display';
		}
		$pf = JRequest::getVar('pf', 0, 'request', 'int');
		$new_values['pf'] = $pf;
		// make sure Itemid is added
		$Itemid = JRequest::getInt( 'Itemid' );
		if ( $Itemid > 0 ) {
			$new_values['Itemid'] = $Itemid;
		}
		// add/modify the values from last_task to new_values
		foreach($new_values as $par_key => $par_value) {
			$last_task[$par_key] = $par_value;
		}
		// generate the link
		$link = 'index.php?option=com_aicontactsafe';
		foreach($last_task as $par_key => $par_value) {
			$link .= '&' . $par_key . '=' . $par_value;
		}
		// make the link seo frindly only for the frontend
		if ($this->_sef == 1 && $this->_backend == 0) {
			$link = JRoute::_($link);
		}
		return $link;
	}	

	// function to send the email with the fields from the contact form
	function sendEmail() {
		// get the information entered into the contact form
		$postData = $this->_app->_session->get( 'postData:' . $this->_sTask );
		
		// import joomla clases to manage file system
		jimport('joomla.filesystem.path');
		jimport('joomla.filesystem.file');

		// initialize the database
		$db = &JFactory::getDBO();

		// get the path to attachments upload
		$upload_folder = str_replace('\\',DS,$this->_config_values['upload_attachments']);
		$upload_folder = str_replace('/',DS,$upload_folder);
		$upload_folder = str_replace('&#92;',DS,$upload_folder);
		$path_upload = JPATH_ROOT.DS.$upload_folder;

		// get the requested profile id
		$pf = $postData['pf'];
		$profile = $this->getProfile( $pf );

		// get the list of the fields from the contact form
		$fields = $this->readFields( $profile );

		// get the email entered into the contact form
		$from = $this->_config_values['default_email'];
		// get the name entered into the contact form
		$fromname = $this->_config_values['default_name'];
		// get the email address where to send the message, if none is specified in control panel, use the one in joomla
		$recipient = $profile->email_address;
		if (strlen($recipient) == 0) {
			$recipient = $this->_app->getCfg('mailfrom');
		}
		// get the prefix to add to the email subject, if none is specified use the name of the joomla site
		$subject_prefix = $profile->subject_prefix;
		if (strlen($subject_prefix) == 0) {
			$subject_prefix = $this->_app->getCfg('fromname');
		}
		// generate the email subject
		$subject = $this->_config_values['default_subject'];
		// check if the email is sent to the sender
		$send_to_sender = 0;
		// record $send_to_sender to register it into the database
		$record_send_to_sender = $send_to_sender;
		// generate the body of the message
		if ($profile->email_mode) {
			$body = '<table border="0" cellpadding="0" cellspacing="2">';
			$body .= '<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
		} else {
			$body = " \n\n ";
		}
		// generate the body of the message recorded into the database
		$body_recorded = '<table border="0" cellpadding="0" cellspacing="2">';
		$body_recorded .= '<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
		// initialize email recipients list
		$email_recipients = array();
		// initialize the db for contacts only once
		$db_not_initialized = true;
		// initialize attachments
		$file_attachments = array();
		// read the form fields
		foreach($fields as $field) {
			$field_value = '';
			$field_email = '';
			switch($field->field_type) {
				case 'TX':
					$field_value = $postData[$field->name];
					break;
				case 'CK':
					$field_value = ($postData[$field->name])?JText::_( 'checked' ):JText::_( 'unchecked' );
					break;
				case 'CB':
					$field_values = explode(';',$field->field_values);
					$field_value = $field_values[$postData[$field->name]];
					break;
				case 'ED':
					$field_value = $postData[$field->name];
					$field_value = str_replace("\n",'<br />', $field_value);
					break;
				case 'CL' :
					$postDataValue = array();
					if (is_array($postData[$field->name])) {
						$field_values = explode(';',$field->field_values);
						foreach($postData[$field->name] as $i=>$v) {
							if ( $v == 1 ) {
								$postDataValue[] = $field_values[$i];
							}
						}
					}
					$field_value = implode(',', $postDataValue);
					break;
				case 'RL' :
					$field_value = $postData[$field->name];
					break;
				case 'DT' :
					$field_value = $postData[$field->name];
					$year = substr($field_value,0,4);
					$month = substr($field_value,5,2);
					$day = substr($field_value,8,2);
					switch($profile->custom_date_format) {
						case 'mdy':
							$field_value = $month . '&nbsp;' . $day . '&nbsp;' . $year;
							break;
						case 'ymd':
							$field_value = $year . '&nbsp;' . $month . '&nbsp;' . $day;
							break;
						case 'dmy':
						default :
							$field_value = $day . '&nbsp;' . $month . '&nbsp;' . $year;
							break;
					}
					break;
				case 'EM' :
					$field_value = $postData[$field->name];
					$field_email = $postData[$field->name];
					if ($field->send_message) {
						$email_recipients[] = $field_email;
					}
					break;
				case 'EL' :
					$field_values = explode(';',$field->field_values);
					$field_value = $field_values[$postData[$field->name]];
					$field_email = substr($field_value, strpos($field_value,':')+1);
					if ($field->send_message) {
						$email_recipients[] = $field_email;
					}
					$field_value = substr($field_value, 0, strpos($field_value,':'));
					break;
				case 'JC' :
					if ($db_not_initialized) {
						// initialize different variables
						$db = & JFactory::getDBO();
						$db_not_initialized = false;
					}
					$query = 'SELECT email_to as email FROM #__contact_details WHERE published = 1 and id = ' . $postData[$field->name];
					$db->setQuery($query);
					$emails = $db->loadObjectList();
					$email = $emails[0];
					$field_email = $email->email;
					if ($field->send_message) {
						$email_recipients[] = $field_email;
					}
					$field_value = $contact_details->name;
					break;
				case 'JU' :
					if ($db_not_initialized) {
						// initialize different variables
						$db = & JFactory::getDBO();
						$db_not_initialized = false;
					}
					$query = 'SELECT email FROM #__users WHERE block = 0 and id = ' . $postData[$field->name];;
					$db->setQuery($query);
					$emails = $db->loadObjectList();
					$email = $emails[0];
					$field_email = $email->email;
					if ($field->send_message) {
						$email_recipients[] = $field_email;
					}
					$field_value = $contact_details->name;
					break;
				case 'SB' :
					if ($db_not_initialized) {
						// initialize different variables
						$db = & JFactory::getDBO();
						$db_not_initialized = false;
					}
					$query = 'SELECT d.data_txt as email FROM #__sobi2_language l LEFT JOIN #__sobi2_fields_data d ON l.fieldid = d.fieldid WHERE l.langKey = \'' . trim($field->field_values) . '\' and l.sobi2Section = \'fields\' and d.itemid = ' . $postData[$field->name];
					$db->setQuery($query);
					$emails = $db->loadObjectList();
					$email = $emails[0];
					$field_email = $email->email;
					if ($field->send_message) {
						$email_recipients[] = $field_email;
					}
					$field_value = $contact_details->name;
					break;
				case 'HD':
					$field_value = $postData[$field->name];
					$field_value = html_entity_decode($field_value, ENT_QUOTES);
					break;
				case 'SP':
					$field_value = '';
					break;
				case 'FL':
					$file = JRequest::getVar( $field->name, 'post', 'files', 'array' );
					if ( strlen(trim($file['name'])) > 0 ) {
						$newFile =& JTable::getInstance('aicontactsafe_messagefiles', 'Table');

						$newFile->id = null;
						$newFile->message_id = 0;
						$newFile->name = '';
						$newFile->date_added = date( 'Y-m-d H:i:s' );
						$newFile->last_update = date( 'Y-m-d H:i:s' );
						$newFile->published = 1;
						$newFile->checked_out = 0;
						$newFile->checked_out_time = '0000-00-00';

						if ($newFile->store()) {
							$file_ext = JFile::getExt($file['name']);
							$file_stem = JFile::stripExt($file['name']);
							$file_name = JFile::makeSafe(strtolower($file_stem.'_'.$newFile->id.'.'.$file_ext));

							$field_link = JURI::root().'index.php?option=com_aicontactsafe&sTask=message&task=download&id='.$newFile->id.'&format=raw';
							$field_value = '<a class="aiContactSafe_attachment" href="'.$field_link.'" target="_blank">'.$file_name.'</a>';

							$query = 'UPDATE #__aicontactsafe_messagefiles SET name = \'' . $file_name . '\' WHERE id = ' . $newFile->id;
							$db->setQuery($query);
							$db->query();

							$filepath = JPath::clean($path_upload.DS.$file_name);
							JFile::upload($file['tmp_name'], $filepath);
							if ($this->_config_values['attach_to_email']) {
								$file_attachments[] = $filepath;
							}
						}
					}
					break;
				case 'NO':
					$field_value = $postData[$field->name];
					break;
				case 'HE' :
					$field->field_in_message = false;
					$field_values = explode(';',$field->field_values);
					if (count($field_values) > 0) {
						foreach($field_values as $field_value) {
							$email_recipients[] = $field_value;
						}
					}
					$field_value = $field->field_values;
					break;
			}
			$field->field_label_message = $this->revert_specialchars($field->field_label_message);
			$field->label_message_parameters = $this->revert_specialchars($field->label_message_parameters);
			$body_recorded .= '<tr><td><span ' . $field->label_message_parameters . '  >' . $field->field_label_message . '</span>';
			if ( $field->field_in_message ) {
				if ($profile->email_mode) {
					$body .= '<tr><td><span ' . $field->label_message_parameters . '  >' . $field->field_label_message . '</span></td><td>&nbsp;</td><td>' . $field_value . '</td></tr>';
				} else {
					if ($field->field_type == 'FL') {
						$body .= $field->field_label_message . " \n " . $field_link . " \n\n ";
					} else {
						$body .= $field->field_label_message . " \n " . $field_value . " \n\n ";
					}
				}
			} else {
				$body_recorded .= '</br><span style="color:#FF0000">(' . JText::_( 'not sent in the email' ) . ')</span>';
			}
			$body_recorded .= '</td><td>&nbsp;</td><td>' . $field_value . '</td></tr>';
			if ($profile->name_field_id == $field->id) {
				$fromname = $field_value;
			}
			if ($profile->email_field_id == $field->id) {
				$from = $field_email;
			}
			if ($profile->subject_field_id == $field->id) {
				$subject = $field_value;
			}
			if ($profile->send_to_sender_field_id == $field->id) {
				$send_to_sender = ($postData[$field->name])?1:0;
				$record_send_to_sender = $send_to_sender;
			}
		}
		if ($profile->email_mode) {
			$body .= '<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
			$body .= '</table>';
		} else {
			$body .= " \n\n ";
		}
		$body_recorded .= '<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
		$body_recorded .= '</table>';
		// select the type of the message to be sent
		$mode = $profile->email_mode?true:false;
		// reset cc and bcc
		$cc=null;
		$bcc=null;
		// check if we send to recipient
		$send_recipient = true;
		$isOK = true;

		// check if the email field is specified, if it's not use the default one in Joomla and disable the send_to_sender variable
		if (strlen($from) == 0) {
			$from = $this->_app->getCfg('mailfrom');
			$send_to_sender = 0;
		}
		// check if the name is specified, use the default one in joomla if it's not
		if (strlen($fromname) == 0) {
			$fromname = $this->_app->getCfg('fromname');
		}

		// generate the subject with the profix
		$subject = $subject_prefix . ' ' . $subject;
		// check if the message has to be sent to the sender
		if ( $send_to_sender ) {
			$email_recipients[] = $from;
		}
		// check if the message have to be sent to the email address specified in the contraol panel
		if ($send_recipient) {
			$email_recipients[] = $recipient;
		}
		// remove duplicated email addresses
		$email_recipients = array_unique($email_recipients);

		// check if the spam control is activated and if the message should be blocked
		$spam_control = $this->checkSpam($body);

		// if the spam control is disabled or the message is not spam
		if ( $spam_control == 1 or $spam_control == 2 ) {
			// if there are emails or contacts in the custom fields, send the message to them
			if ( count($email_recipients) > 0 ) {
				foreach($email_recipients as $email_recipient) {
					// send the message
					$isOK = JUtility::sendMail($from, $fromname, $email_recipient, $subject, $body, $mode, $cc, $bcc, $file_attachments);
				}
				$send_recipient = $profile->always_send_to_email_address;
			}
		} else {
			// if the message is spam and this feature is activated ban the IP that sent it
			if ( $this->_config_values['ban_ips_blocked_words'] ) {
				$this->ban_ip($_SERVER['REMOTE_ADDR']);
			}
		}
		// if the feature is activated in control panel, record the message into the database 
		// and the spam control is disabled or the message is not spam or the message is recorded even if the message is spam
		if ($profile->record_message && ($spam_control == 1 or $spam_control == 2 or $spam_control == 3)) {
			// initialize the row variables
			$dataRow =& JTable::getInstance('aicontactsafe_messages', 'Table');
			// fill the name, email, subject and send_to_sender used with this message
			$postData['name'] = $fromname;
			$postData['email'] = $from;
			$postData['subject'] = $subject;
			if ( $record_send_to_sender == JText::_( 'unchecked' ) ) {
				$record_send_to_sender = 0;
			}
			$postData['send_to_sender'] = $record_send_to_sender?1:0;
			// fill the message and senders_ip fields into the form data
			$postData['message'] = $body_recorded;
			$postData['sender_ip'] = $_SERVER['REMOTE_ADDR'];
			// record the profile's id
			$postData['profile_id'] = $profile->id;
			// bind the data sent from the form to the table fields
			$dataRow->bind($postData);
			// store the message
			$dataRow->store();

			$query = 'UPDATE #__aicontactsafe_messagefiles SET message_id = ' . $dataRow->id . ' WHERE message_id = 0';
			$db->setQuery($query);
			$db->query();
		}
		if ( $isOK ) {
			$this->resetFormFields();
		}

		return $isOK;
	}

	function getProfile( $pf = 0 ) {
		$selected_profile = null;
		$default_profile = null;
		if ( $pf == 0 ) {
			// get the requested profile id
			$pf = JRequest::getVar('pf', 0, 'request', 'int');
		}
		if ( $pf == 0 ) {
			$postData = $this->_app->_session->get( 'postData:' . $this->_sTask );
			if (is_array($postData) && array_key_exists('pf', $postData)) {
				$pf = (int)$postData['pf'];
			}
		}

		// initialize the database
		$db = &JFactory::getDBO();

		// get the profile values
		$query = 'SELECT * FROM #__aicontactsafe_profiles WHERE ( id = ' . $pf . ' and published = 1 ) or set_default = 1 ORDER by set_default';
		$db->setQuery( $query );
		$profiles = $db->loadObjectList();
		if ( count($profiles) > 0 ) {
			// read the profiles
			foreach($profiles as $profile) {
				if ( $profile->id == $pf ) {
					$selected_profile = $profile;
				}
				if ( $profile->set_default ) {
					$default_profile = $profile;
				}
			}
			// if no profile is selected, use the default one
			if (!$selected_profile) {
				$selected_profile = $default_profile;
			}
		}

		$selected_profile->required_field_mark = $this->revert_specialchars($selected_profile->required_field_mark);
		
		return $selected_profile;
	}

	// get the name of the month
	function getMonth( $i = 0 ) {
		$monthName = '';
		switch($i) {
			case 1:
				$monthName = JText::_( 'January' );
				break;
			case 2:
				$monthName = JText::_( 'February' );
				break;
			case 3:
				$monthName = JText::_( 'March' );
				break;
			case 4:
				$monthName = JText::_( 'April' );
				break;
			case 5:
				$monthName = JText::_( 'May' );
				break;
			case 6:
				$monthName = JText::_( 'June' );
				break;
			case 7:
				$monthName = JText::_( 'July' );
				break;
			case 8:
				$monthName = JText::_( 'August' );
				break;
			case 9:
				$monthName = JText::_( 'September' );
				break;
			case 10:
				$monthName = JText::_( 'October' );
				break;
			case 11:
				$monthName = JText::_( 'November' );
				break;
			case 12:
				$monthName = JText::_( 'December' );
				break;
		}
		return $monthName;
	}

	// function to check if the spam control is activated or the message is spam 
	// returns 
	//		1 - the control is disabled
	//		2 - the message is not spam
	// 		3 - the message is spam but the message is recorded
	// 		4 - the message is spam and the message is not recorded
	function checkSpam( $body = '' ) {
		$spam_response = 1;
		if ($this->_config_values['activate_spam_control']) {
			$is_spam = false;
			$block_words = explode(';',$this->_config_values['block_words']);
			foreach($block_words as $word) {
				if ( strlen(trim($word)) > 0 && !strpos($body,$word) === false ) {
					$is_spam = true;
					break;
				}
			}
			if ($is_spam) {
				if ($this->_config_values['record_blocked_messages']) {
					$spam_response = 3;
				} else {
					$spam_response = 4;
				}
			} else {
				$spam_response = 2;
			}
		}
		return $spam_response;
	}

	function checkBanIp() {
		$ban_ip = false;
		if ( $this->_config_values['activate_ip_ban'] ) {
			$current_ip = $_SERVER['REMOTE_ADDR'];
			$check_ip = explode('.',$current_ip);
			$ips_to_ban = explode(';',$this->_config_values['ban_ips']);
			foreach($ips_to_ban as $ip_to_ban) {
				if ( strlen(trim($ip_to_ban)) > 0 ) {
					$check_ip_to_ban = explode('.',$ip_to_ban);
					if ( trim($check_ip[1]) === trim($check_ip_to_ban[1]) && 
					    ( trim($check_ip[2]) === trim($check_ip_to_ban[2]) || trim($check_ip_to_ban[2]) === '*' ) && 
						( trim($check_ip[3]) === trim($check_ip_to_ban[3]) || trim($check_ip_to_ban[3]) === '*' ) && 
						( trim($check_ip[4]) === trim($check_ip_to_ban[4]) || trim($check_ip_to_ban[4]) === '*' )) {
						$ban_ip = true;
					}
				}
				if ( $ban_ip ) {
					break;
				}
			}
		}
		if ( $this->_config_values['activate_ip_ban'] && $this->_config_values['maximum_messages_ban_ip'] > 0 && $this->_config_values['maximum_minutes_ban_ip'] > 0 ) {
			$current_ip = $_SERVER['REMOTE_ADDR'];

			// initialize different variables
			$db = & JFactory::getDBO();

			// get all messages from the current IP in the last "maximum_minutes_ban_ip" minutes
			$query = 'SELECT count(*) as count_messages FROM #__aicontactsafe_messages WHERE sender_ip = \''.$current_ip.'\' and date_added > DATE_SUB(now(),INTERVAL '.$this->_config_values['maximum_minutes_ban_ip'].' minute)';

			$db->setQuery($query);
			$count_messages = $db->loadResult();
			if ( $count_messages >= $this->_config_values['maximum_messages_ban_ip'] ) {
				$this->ban_ip($current_ip);
				$ban_ip = true;
			}
		}

		return $ban_ip;
	}

	// download a file attached to a message
	function downloadFile() {
		// get the id of the file
		$id = JRequest::getVar('id', 0, 'request', 'int');
		// get the path to attachments upload
		$upload_folder = str_replace('\\',DS,$this->_config_values['upload_attachments']);
		$upload_folder = str_replace('/',DS,$upload_folder);
		$upload_folder = str_replace('&#92;',DS,$upload_folder);
		$path_upload = JPATH_ROOT.DS.$upload_folder;
		// initialize the database
		$db = &JFactory::getDBO();
		// get the name of the file to download
		$query = 'SELECT name FROM #__aicontactsafe_messagefiles where id = ' . $id;
		$db->setQuery($query);
		$file_name = $db->loadResult();
		$file = $path_upload.DS.$file_name;

		// start the file download
		if ( file_exists($file) ){
			// Make sure there's not anything else left for download
			$this->ob_clean_all(); 

			header('Content-Description: File Transfer');
		    header('Content-Type: application/octet-stream');
		    header('Content-Disposition: attachment; filename='.basename($file));
		    header('Content-Transfer-Encoding: binary');
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($file));
		    ob_clean();
		    flush();

			readfile($file);
			exit;
		}
	}

	// Make sure there's not anything else left to download
	function ob_clean_all() {
		$ob_active = ob_get_length() !== false;
		while($ob_active) {
			ob_end_clean();
			$ob_active = ob_get_length() !== false;
		}
	
		return true;
	} 

	// function to validate an email address
	function validateEmail($email_address) {
		$atom = '[a-zA-Z0-9!#$%&\'*+\-\/=?^_`{|}~]+';
		$quoted_string = '"[^"\\\\\r\n]*"';
		$word = "$atom(\.$atom)*";
		$domain = "$atom(\.$atom)+";
		$email_valid = strlen($email_address) < 256 && preg_match("/^($word|$quoted_string)@{$domain}\$/", $email_address);
		return $email_valid;
	}

	// function to ban and IP and notify the administrator
	function ban_ip( $ips_list = '' ) {
		$ips_to_ban = explode(';',$ips_list);
		$ips_banned = explode(';',$this->_config_values['ban_ips']);
		$ips_banned = array_merge($ips_banned, $ips_to_ban);
		$ips_banned = array_unique($ips_banned);
		asort($ips_banned);

		$ban_ips = implode(';',$ips_banned);
		if (substr($ban_ips,0,1) == ';') {
			$ban_ips = substr($ban_ips,1);
		}

		// initialize different variables
		$db = & JFactory::getDBO();

		$query = 'update `#__aicontactsafe_config` set config_value = \'' . $ban_ips . '\' where config_key = \'ban_ips\'';
		$db->setQuery( $query );
		$isOK = $db->query();
		if ($isOK) {
			// send a notification to the administrator
			$from = $this->_app->getCfg('mailfrom');
			$fromname = $this->_app->getCfg('fromname');
			$email_recipient = $this->_app->getCfg('mailfrom');
			$subject = JText::_( 'IP automatically blocked !' );
			$body = JText::_( 'IP automatically blocked !' ) . '<br />' . $ips_list . '<br />';
			$mode = true;
			$isOK = JUtility::sendMail($from, $fromname, $email_recipient, $subject, $body, $mode);
		} else {
			$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
			JError::raiseError( 500, $db->getErrorMsg() );
			return false;
		}
		return true;
	}

}
?>
