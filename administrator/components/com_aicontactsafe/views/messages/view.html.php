<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel view class of aiContactSafe
class AiContactSafeViewMessages extends AiContactSafeViewDefault {

	// construct function, it will iniaize the class variables
	function __construct( $default = array() )	{
		switch(true) {
			case $default['_task'] == 'display' :
				$this->_help_id = 'messages_display';
				break;
			case $default['_task'] == 'view' :
				$this->_help_id = 'messages_view';
				break;
			case $default['_task'] == 'delete' :
				$this->_help_id = 'messages_delete';
				break;
			case $default['_task'] == 'ban_ip' :
				$this->_help_id = 'messages_ban_ip';
				break;
			default :
				$this->_help_id = 'messages_display';
		}

		parent::__construct( $default );
	}

	// function to define the toolbar depending on the section
	function setToolbarButtons() {
		switch(true) {
			case $this->_task == 'view' :
				JToolBarHelper::custom( 'cancel', 'cancel_ai.gif', 'cancel_ai.gif', JText::_( 'Close' ), false,  false );
				break;
			case $this->_task == 'delete' :
				JToolBarHelper::custom( 'confirmDelete',  'apply_ai.png', 'apply_ai.png', JText::_( 'Confirm' ), true,  false );
				JToolBarHelper::custom( 'cancel', 'cancel_ai.gif', 'cancel_ai.gif', JText::_( 'Cancel' ), false,  false );
				break;
			case $this->_task == 'ban_ip' :
				JToolBarHelper::custom( 'confirmBanIp',  'apply_ai.png', 'apply_ai.png', JText::_( 'Confirm' ), true,  false );
				JToolBarHelper::custom( 'cancel', 'cancel_ai.gif', 'cancel_ai.gif', JText::_( 'Cancel' ), false,  false );
				break;
			case $this->_task == 'display' :
				JToolBarHelper::custom( 'view', 'view_ai.gif', 'view_ai.gif', JText::_( 'View' ), true,  false );
				JToolBarHelper::custom( 'delete', 'delete_ai.gif', 'delete_ai.gif', JText::_( 'Delete' ), true,  false );
				if ($this->_config_values['activate_ip_ban']) {
					JToolBarHelper::custom( 'ban_ip', 'ban_ip_ai.gif', 'ban_ip_ai.gif', JText::_( 'Ban IP' ), true,  false );
				}
				break;
		}
	}

	// function to initialize the variables used in the template
	function setVariables() {
		$model = &$this->getModel();

		switch(true) {
			// in case a record is viewed initialize the fields
			case $this->_task == 'view' :
				if ($this->_id > 0) {
					$this->setRowData($this->_id);
				}
				$this->profile = $model->getProfileName($this->profile_id);
				break;
			// in case one or more records are deleted
			case $this->_task == 'delete' :
				$this->rows = $model->readDeleteRows();
				break;
			// in case one or more records are deleted
			case $this->_task == 'ban_ip' :
				$this->rows = $model->readSelectedIps();
				break;
			// or else initialize the variables to show a list of records
			case $this->_task == 'display' && strlen($this->_sTask) > 0 :
				$this->filter_order = $model->filter_order;
				$this->filter_order_Dir = $model->filter_order_Dir;
				$this->limit = $model->limit;
				$this->limitstart = $model->limitstart;
				$this->filter_condition = $model->filter_condition;
				$this->filter_string = $model->filter_string;
				$this->filter_profile = $this->selectProfile($model->filter_profile, 'filter_profile', 2, 0, 'class="inputbox" size="1" onchange="document.adminForm.submit();"' );
				$this->filter_email = $model->filter_email;
				$this->filter_subject = $model->filter_subject;
				$this->rows = $model->readRows();
				$this->pageNav = $model->pageNav;
				break;
			default :
				// - nothing
		}
	}

	// function to generate the html code to select a profile
	function selectProfile( $id = 0, $html_name = 'select_profile', $addSelect = 1, $onlyPublished = 0, $html_params = 'class="inputbox" size="1"', $key = 'id', $text = 'name', $idtag = false, $translate = true ) {
		$db = & JFactory::getDBO();
		$query_condition = '';
		if ($onlyPublished) {
			$query_condition = ' WHERE published = 1 ';
		}
		$query = 'SELECT name as ' . $text . ', id as ' . $key . ' FROM #__aicontactsafe_profiles ' . $query_condition . ' ORDER BY ' . $text;
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
