<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel model class of aiContactSafe
class AiContactSafeModelMessages extends AiContactSafeModelDefault {

	// list of IPs selected for ban
	var $ban_ips_rowlist = null;
	// filter records that where sent using a specific profile
	var $filter_profile = null;
	// filter records that where sent from a specific email address
	var $filter_email = null;
	// filter records that where sent using a specific subject
	var $filter_subject = null;

	// construct function, it will iniaize the class variables
	function __construct( $default = array() )	{
		parent::__construct( $default );
		$this->filter_profile = $this->getSessionStateFromRequest( $this->_sTask.'filter_profile', 'filter_profile', '', 'int' );
		$this->filter_email = $this->getSessionStateFromRequest( $this->_sTask.'filter_email', 'filter_email', '', 'string' );
		$this->filter_subject = $this->getSessionStateFromRequest( $this->_sTask.'filter_subject', 'filter_subject', '', 'string' );
	}

	// function to define the sql command to count the records to display
	function setCountSelect() {
		$this->count_select_sql = 'SELECT count(*) FROM #__aicontactsafe_messages m LEFT JOIN #__aicontactsafe_profiles p ON m.profile_id = p.id';
		return $this->count_select_sql;
	}

	// function to define the sql command to display records
	function setSelect() {
		$this->select_sql = 'SELECT m.*, p.name as profile FROM #__aicontactsafe_messages m LEFT JOIN #__aicontactsafe_profiles p ON m.profile_id = p.id';
		return $this->select_sql;
	}

	// function to generate the condition records have to respect to be displayed
	function getWhere() {
		if ( strlen($this->filter_condition) == 0 ) {
			$where = ' WHERE 1 ';
		} else {
			$where = ' WHERE ' . $this->filter_condition . ' ';
		}
		if ( strlen($this->filter_string) > 0 ) {
			$where .= ' AND LOWER( m.name ) LIKE "%' . $this->filter_string . '%"';
		}
		if ( strlen($this->filter_email) > 0 ) {
			$where .= ' AND LOWER( m.email ) LIKE "%' . $this->filter_email . '%"';
		}
		if ( strlen($this->filter_subject) > 0 ) {
			$where .= ' AND LOWER( m.subject ) LIKE "%' . $this->filter_subject . '%"';
		}
		if ( $this->filter_profile > 0 ) {
			$where .= ' AND m.profile_id = '.$this->filter_profile;
		}
		return $where;
	}

	// function to add/modify values in the record list
	function setRowValues($rowlist) {
		$n = count($rowlist);
		for ($i = 0; $i < $n; $i++ ) {
			$rowlist[$i]->view = JRoute::_('index.php?option=com_aicontactsafe&sTask=' . $this->_sTask . '&task=view&id=' . $rowlist[$i]->id);
		}
	}

	// function to define the sql command to select records to delete
	function setDeleteSelect() {
		$field_separator = '&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;';
		$this->delete_select_sql = 'SELECT id, CONCAT(TRIM(name),\''.$field_separator.'\',TRIM(email),\''.$field_separator.'\',TRIM(subject),\''.$field_separator.'\',date_added) as name FROM #__aicontactsafe_messages %where% order by name';
		return $this->delete_select_sql;
	}

	// function to delete selected records
	function deleteData() {
		$wasDeleted = parent::deleteData();
		// initialize different variables
		if ($wasDeleted) {
			// initialize the database
			$db = &JFactory::getDBO();
			// import joomla clases to manage file system
			jimport('joomla.filesystem.path');
			jimport('joomla.filesystem.file');
			// get the path to attachments upload
			$upload_folder = str_replace('\\',DS,$this->_config_values['upload_attachments']);
			$upload_folder = str_replace('/',DS,$upload_folder);
			$upload_folder = str_replace('&#92;',DS,$upload_folder);
			$path_upload = JPATH_ROOT.DS.$upload_folder;
			// read the ids of the records seleted for deletion
			$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
			JArrayHelper::toInteger($cid);
			if (count($cid) > 0) {
				$cids = implode(',', $cid);
			} else {
				$cids = '-1';
			}
			// get the files to delete
			$query = 'SELECT id, name FROM #__aicontactsafe_messagefiles WHERE message_id IN ( '.$cids.' )';
			$db->setQuery($query);
			$files = $db->loadObjectList();
			if (count($files) > 0) {
				foreach($files as $file) {
					$delete_file = $path_upload.DS.$file->name;
					JFile::delete($delete_file);
					$query = 'DELETE FROM #__aicontactsafe_messagefiles WHERE id = '.$file->id;
					$db->setQuery($query);
					$db->query();
				}
			}
		}
		return true;
	}

	// function to select the IPs to ban
	function readSelectedIps() {
		if(!$this->ban_ips_rowlist) {
			// initialize the database
			$db = &JFactory::getDBO();

			// get the condition for the selected records
			$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
			JArrayHelper::toInteger($cid);
			if (count($cid) > 0) {
				$cids = implode(',', $cid);
			} else {
				$cids = '-1';
			}

			// get the IPs to ban
			$query = 'SELECT * FROM #__aicontactsafe_messages WHERE id IN ( ' . $cids . ') GROUP BY sender_ip ORDER BY sender_ip';

			$this->ban_ips_rowlist = $this->_getList($query, 0, 0);
			if (!is_array($this->ban_ips_rowlist)) {
				$this->ban_ips_rowlist = array();
			}
		}
		return $this->ban_ips_rowlist;
	}

	// function to ban an IP
	function banIP() {
		// initialize different variables
		$db = & JFactory::getDBO();
		// read the ids of the records seleted to ban IP
		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);
		if (count($cid) > 0) {
			$cids = implode(',', $cid);
		} else {
			$cids = '-1';
		}
		// get all the IPs to ban
		$query = 'SELECT DISTINCT sender_ip FROM #__aicontactsafe_messages WHERE id IN ( ' . $cids . ') ORDER BY sender_ip';
		$db->setQuery($query);
		$ips_to_ban = $db->loadResultArray();
		$ips_banned = explode(';',$this->_config_values['ban_ips']);
		$ips_banned = array_merge($ips_banned, $ips_to_ban);
		$ips_banned = array_unique($ips_banned);
		asort($ips_banned);

		$ban_ips = implode(';',$ips_banned);
		if (substr($ban_ips,0,1) == ';') {
			$ban_ips = substr($ban_ips,1);
		}
		$query = 'update `#__aicontactsafe_config` set config_value = \'' . $ban_ips . '\' where config_key = \'ban_ips\'';
		$db->setQuery( $query );
		$isOK = $db->query();
		if (!$isOK) {
			$this->_app->_session->set( 'isOK:' . $this->_sTask, false );
			JError::raiseError( 500, $db->getErrorMsg() );
			return false;
		}

		return true;
	}

	// function to read the profile name used to send the message
	function getProfileName( $id = 0 ) {
		$id = (int)$id;
		// initialize different variables
		$db = & JFactory::getDBO();
		$query = 'SELECT name FROM #__aicontactsafe_profiles WHERE id = '.$id;
		$db->setQuery($query);
		$profile = $this->revert_specialchars($db->loadResult());
		return $profile;
	}
}
?>
