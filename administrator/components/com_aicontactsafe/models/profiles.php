<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel model class of aiContactSafe
class AiContactSafeModelProfiles extends AiContactSafeModelDefault {

	// function to check/add/modify different fields before writing them to the database
	function checkBeforeWrite($postData) {
		// check if a name was entered
		if (strlen(trim($postData['name'])) == 0) {
			$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
			$this->_app->_session->set( 'errorMsg:' . $this->_sTask, JText::_( 'Please enter the name of the profile.' ) );
		} else {
			$postData = parent::checkBeforeWrite($postData);
		}

		$postData['use_ajax'] = $postData['use_ajax']?1:0;
		$postData['use_message_css'] = $postData['use_message_css']?1:0;
		$postData['captcha_backgroundTransparent'] = $postData['captcha_backgroundTransparent']?1:0;
		$postData['always_send_to_email_address'] = $postData['always_send_to_email_address']?1:0;
		$postData['record_message'] = $postData['record_message']?1:0;

		$postData['plg_contact_info'] = $postData['plg_contact_info']?1:0;
		$postData['use_random_letters'] = $postData['use_random_letters']?1:0;

		$postData['required_field_mark'] = JRequest::getVar('required_field_mark', '', 'post', 'string', JREQUEST_ALLOWHTML);
		$postData['required_field_mark'] = $this->replace_specialchars($postData['required_field_mark']);

		$postData['set_default'] = $postData['set_default']?1:0;
		if ( $postData['set_default'] == 1 ) {
			$this->resetDefaultProfile();
		} else {
			$postData['set_default'] = $this->checkDefaultProfile( $postData['id'] );
		}
		$postData['published'] = $postData['published']?1:0;
		if ( $postData['all_fields'] ) {
			$postData['active_fields'] = 0;
		} else {
			$fieldError = false;
			if ( $postData['name_field_id'] >0 && array_search($postData['name_field_id'],$postData['select_fields']) === false ) {
				$postData['select_fields'][] = $postData['name_field_id'];
				$fieldError = true;
			}
			if ( $postData['email_field_id'] > 0 && array_search($postData['email_field_id'],$postData['select_fields']) === false ) {
				$postData['select_fields'][] = $postData['email_field_id'];
				$fieldError = true;
			}
			if ( $postData['subject_field_id'] > 0 && array_search($postData['subject_field_id'],$postData['select_fields']) === false ) {
				$postData['select_fields'][] = $postData['subject_field_id'];
				$fieldError = true;
			}
			if ( $postData['send_to_sender_field_id'] > 0 && array_search($postData['send_to_sender_field_id'],$postData['select_fields']) === false ) {
				$postData['select_fields'][] = $postData['send_to_sender_field_id'];
				$fieldError = true;
			}
			if ( $fieldError ) {
				$this->_app->enqueueMessage(JText::_( 'SELECTED_FIELDS_ERROR' ), 'error');
			}
			$postData['active_fields'] = implode(',', $postData['select_fields']);
		}

		return $postData;
	}

	// function to reset the default profile
	function resetDefaultProfile() {
		// initialize the database
		$db = &JFactory::getDBO();
		// reset field set_default to 0 for all records
		$query = 'UPDATE `#__aicontactsafe_profiles` SET set_default = 0';
		$db->setQuery( $query );
		$db->query();
	}

	// function to check if the default profile was deactivated
	function checkDefaultProfile( $id = 0 ) {
		$id = (int)$id;
		// initialize the database
		$db = &JFactory::getDBO();
		// reset field set_default to 0 for all records
		$query = 'SELECT set_default FROM `#__aicontactsafe_profiles` WHERE id = '.$id;
		$db->setQuery( $query );
		$set_default = $db->loadResult();
		if ($set_default == 1) {
			$this->_app->enqueueMessage(JText::_( 'DEACTIVATE_DEFAULT_ERROR' ), 'error');
		}
		return $set_default;
	}

	//function to write data in other tables then the default one of the current sTask
	function writeOtherTables( $postData = array(), $id = 0 ) {
		// get the information in the form
		$id = (int)$id;
		$name = $postData['name'];
		$contact_info = JRequest::getVar('contact_info', '', 'post', 'string', JREQUEST_ALLOWHTML);
		$contact_info = $this->replace_specialchars($contact_info);
		$meta_description = $postData['meta_description'];
		$meta_keywords = $postData['meta_keywords'];
		$thank_you_message = JRequest::getVar('thank_you_message', '', 'post', 'string', JREQUEST_ALLOWHTML);
		$thank_you_message = $this->replace_specialchars($thank_you_message);

		// initialize the database
		$db = &JFactory::getDBO();

		// save contact_info
		$query = 'SELECT id FROM #__aicontactsafe_contactinformations WHERE profile_id = ' . $id . ' and info_key = \'contact_info\'';
		$db->setQuery( $query );
		$added = $db->loadResult();
		if ($added > 0) {
			$query = 'UPDATE `#__aicontactsafe_contactinformations` set info_label = \'contact_info (' . $name . ')\', info_value = \'' . $contact_info . '\' WHERE profile_id = ' . $id . ' and info_key = \'contact_info\'';
		} else {
			$query = 'INSERT INTO `#__aicontactsafe_contactinformations` (`id`, `profile_id`, `info_key`, `info_label`, `info_value`) VALUES (null, ' . $id . ', \'contact_info\', \'contact_info (' . $name . ')\', \'' . $contact_info . '\')';
		}
		$db->setQuery( $query );
		$db->query();

		// save meta_description
		$query = 'SELECT id FROM #__aicontactsafe_contactinformations WHERE profile_id = ' . $id . ' and info_key = \'meta_description\'';
		$db->setQuery( $query );
		$added = $db->loadResult();
		if ($added > 0) {
			$query = 'UPDATE `#__aicontactsafe_contactinformations` set info_label = \'meta_description (' . $name . ')\', info_value = \'' . $meta_description . '\' WHERE profile_id = ' . $id . ' and info_key = \'meta_description\'';
		} else {
			$query = 'INSERT INTO `#__aicontactsafe_contactinformations` (`id`, `profile_id`, `info_key`, `info_label`, `info_value`) VALUES (null, ' . $id . ', \'meta_description\', \'meta_description (' . $name . ')\', \'' . $meta_description . '\')';
		}
		$db->setQuery( $query );
		$db->query();

		// save meta_keywords
		$query = 'SELECT id FROM #__aicontactsafe_contactinformations WHERE profile_id = ' . $id . ' and info_key = \'meta_keywords\'';
		$db->setQuery( $query );
		$added = $db->loadResult();
		if ($added > 0) {
			$query = 'UPDATE `#__aicontactsafe_contactinformations` set info_label = \'meta_keywords (' . $name . ')\', info_value = \'' . $meta_keywords . '\' WHERE profile_id = ' . $id . ' and info_key = \'meta_keywords\'';
		} else {
			$query = 'INSERT INTO `#__aicontactsafe_contactinformations` (`id`, `profile_id`, `info_key`, `info_label`, `info_value`) VALUES (null, ' . $id . ', \'meta_keywords\', \'meta_keywords (' . $name . ')\', \'' . $meta_keywords . '\')';
		}
		$db->setQuery( $query );
		$db->query();

		// save thank you message
		$query = 'SELECT id FROM #__aicontactsafe_contactinformations WHERE profile_id = ' . $id . ' and info_key = \'thank_you_message\'';
		$db->setQuery( $query );
		$added = $db->loadResult();
		if ($added > 0) {
			$query = 'UPDATE `#__aicontactsafe_contactinformations` set info_label = \'thank_you_message (' . $name . ')\', info_value = \'' . $thank_you_message . '\' WHERE profile_id = ' . $id . ' and info_key = \'thank_you_message\'';
		} else {
			$query = 'INSERT INTO `#__aicontactsafe_contactinformations` (`id`, `profile_id`, `info_key`, `info_label`, `info_value`) VALUES (null, ' . $id . ', \'thank_you_message\', \'thank_you_message (' . $name . ')\', \'' . $thank_you_message . '\')';
		}
		$db->setQuery( $query );
		$db->query();

		// import joomla clases to manage file system
		jimport('joomla.filesystem.file');
		// write the css code of the profile
		$css_file = JPATH_ROOT.DS.'components'.DS.'com_aicontactsafe'.DS.'views'.DS.'message'.DS.'tmpl'.DS.'profile_css_'.$id.'.css';
		$css_code = JFile::write($css_file, $this->revert_specialchars($postData['profile_css_code']));

		return true;
	}

	// function to get the contact informations of the current profile
	function getContactInformation( $profile_id = 0 ) {
		// initialize contact informations
		$contact_info = array();
		$contact_info['contact_info'] = '';
		$contact_info['meta_description'] = '';
		$contact_info['meta_keywords'] = '';
		$contact_info['thank_you_message'] = '';

		// initialize the database
		$db = &JFactory::getDBO();

		// get contact informations
		$query = 'SELECT info_key, info_value FROM #__aicontactsafe_contactinformations WHERE profile_id = ' . $profile_id;
		$db->setQuery( $query );
		$records = $db->loadObjectList();
		if ( count($records) > 0 ) {
			foreach($records as $record) {
				$record->info_value = $this->revert_specialchars($record->info_value);
				switch($record->info_key) {
					case 'contact_info' :
						$contact_info['contact_info'] = $record->info_value;
						break;
					case 'meta_description' :
						$contact_info['meta_description'] = $record->info_value;
						break;
					case 'meta_keywords' :
						$contact_info['meta_keywords'] = $record->info_value;
						break;
					case 'thank_you_message' :
						$contact_info['thank_you_message'] = $record->info_value;
						break;
				}
			}
		}
		
		return $contact_info;
	}

	// function to retrive the fields to select the ones active in a profile
	function getFields( $active_fields = '' ) {
		$active_fields = explode(',',$active_fields);
		// initialize the response array
		$fields = array();
		// initialize the database
		$db = &JFactory::getDBO();
		// get all the fields
		$query = 'SELECT id, name, field_label FROM #__aicontactsafe_fields ORDER BY ordering';
		$db->setQuery( $query );
		$records = $db->loadObjectList();
		foreach($records as $record) {
			$fields[] = array('id'=>$record->id, 'name'=>$record->name, 'field_label'=>$record->field_label, 'selected'=>(array_search($record->id, $active_fields) === false)?'0':'1');
		}
		return $fields;
	}

	// function to generate the condition records have to respect to be selected for deletion
	function getDeleteWhere($cids = '-1') {
		// initialize the database
		$db = &JFactory::getDBO();
		// get the default record
		$query = 'SELECT id FROM `#__aicontactsafe_profiles` WHERE set_default = 1';
		$db->setQuery( $query );
		$id = $db->loadResult();

		$ctablename = $this->getTableName($this->_sTask, 'getDeleteWhere');
		$cids = explode(',', $cids);
		$countCids = count($cids);
		for($i=0;$i<$countCids;$i++){
			if ( $cids[$i] == $id ) {
				$this->_app->enqueueMessage(JText::_( 'DEFAULT_PROFILE_DELETE_ERROR' ), 'error');
				$cids[$i] = 0;
			}
		}
		$cids = implode(',', $cids);
		$where = ' where ' . $ctablename . '.id IN ( ' . $cids . ' )';
		return $where;
	}

	// function to read the content of the css file of a profile
	function readProfileCssFile( $id = 0 ) {
		$css_code = '';
		if ( $id > 0 ) {
			// import joomla clases to manage file system
			jimport('joomla.filesystem.file');
			
			$css_file = JPATH_ROOT.DS.'components'.DS.'com_aicontactsafe'.DS.'views'.DS.'message'.DS.'tmpl'.DS.'profile_css_'.$id.'.css';
			if (JFile::exists($css_file)) {
				$css_code = JFile::read($css_file);
			}
		}
		return $css_code;
	}

}
?>
