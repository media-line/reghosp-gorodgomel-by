<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 *
 * added/fixed in version 2.0.1
 * - added Artio activation
 * - added Joom!Fish activation
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel view class of aiContactSafe
class AiContactSafeViewControl_panel extends AiContactSafeViewDefault {

	// construct function, it will iniaize the class variables
	function __construct( $default = array() )	{
		$this->_help_id = 'control_panel';

		parent::__construct( $default );
	}

	// function to define the toolbar depending on the section
	function setToolbarButtons() {
		switch(true) {
			// in case a delete for database tables and uploaded files was requested, ask for a confirmation
			case $this->_task == 'confirm_delete_all' :
				JToolBarHelper::custom( 'delete_all_accepted',  'apply_ai.png', 'apply_ai.png', JText::_( 'Confirm' ), false,  false );
				JToolBarHelper::custom( 'cancel', 'cancel_ai.gif', 'cancel_ai.gif', JText::_( 'Cancel' ), false,  false );
				break;
			// or else use the default layout
			case $this->_task == 'display' :
			default :
				JToolBarHelper::custom( 'save', 'save_ai.gif', 'save_ai.gif', JText::_( 'Save' ), false,  false );
				JToolBarHelper::custom( 'cancel', 'cancel_ai.gif', 'cancel_ai.gif', JText::_( 'Close' ), false,  false );
		}
	}

	// function to determine where to return the control when the current section is closed
	function setsTaskReturn() {
		// record the section to return to
		$return_task = array();
		$return_task['sTask'] = 'default';
		// record the section to return to
		$this->_app->_session->set( 'return_task:' . $this->_sTask, $return_task );
	}

	// function to initialize the variables used in the template
	function setVariables() {
		// initialize the database
		$db = & JFactory::getDBO();
		// load the configuration variables
		$query = "select * from  `#__aicontactsafe_config`";
		$db->setQuery( $query );
		$config_values = $db->loadObjectList();
		if ( count($config_values) > 0) {
			foreach($config_values as $value) {
				$config_key = $value->config_key;
				$config_value = $value->config_value;
				$this->$config_key = $config_value;
			}
		}
		// load the contact informations variables
		$query = "select * from  `#__aicontactsafe_contactinformations`";
		$db->setQuery( $query );
		$info_values = $db->loadObjectList();
		if ( count($info_values) > 0) {
			foreach($info_values as $value) {
				$info_key = $value->info_key;
				$info_value = $value->info_value;
				$this->$info_key = $info_value;
			}
		}

		// initialize the model
		$model = &$this->getModel();
		// check artion
		$activate_artio = $model->check_artio();
		$this->activate_artio = '';
		switch($activate_artio) {
			case 0:
				$this->activate_artio = '<font color="#808080">' . JText::_( 'Artio not installed' ) . '</font>';
				break;
			case 1:
				$this->activate_artio = '<button onclick="document.getElementById(\'task\').value=\'activate_artio\';this.form.submit();">' . JText::_( 'Activate' ) . '</button>';
				break;
			case 2:
				$this->activate_artio = '<font color="#008000">' . JText::_( 'Artio activated' ) . '</font>';
				$this->activate_artio .= '&nbsp;&nbsp;<button onclick="document.getElementById(\'task\').value=\'deactivate_artio\';this.form.submit();">' . JText::_( 'Deactivate' ) . '</button>';
				break;
		}
		// check joomfish
		$activate_joomfish = $model->check_joomfish();
		$this->activate_joomfish = '';
		switch($activate_joomfish) {
			case 0:
				$this->activate_joomfish = '<font color="#808080">' . JText::_( 'Joom!Fish not installed' ) . '</font>';
				break;
			case 1:
				$this->activate_joomfish = '<button onclick="document.getElementById(\'task\').value=\'activate_joomfish\';this.form.submit();">' . JText::_( 'Activate' ) . '</button>';
				break;
			case 2:
				$this->activate_joomfish = '<font color="#008000">' . JText::_( 'Joom!Fish activated' ) . '</font>';
				$this->activate_joomfish .= '&nbsp;&nbsp;<button onclick="document.getElementById(\'task\').value=\'deactivate_joomfish\';this.form.submit();">' . JText::_( 'Deactivate' ) . '</button>';
				break;
		}
		// check for the message section in the templates
		$this->withoutMessageSection = $model->checkMessageSection();
	}
}

?>
