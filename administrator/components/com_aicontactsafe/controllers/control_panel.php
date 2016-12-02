<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel controller class of aiContactSafe
class AiContactSafeControllerControl_panel extends AiContactSafeController {

	// get the layout to use - always use the same layout
	function getSTaskLayout($sTask = '') {
		switch(true) {
			// in case a delete for database tables and uploaded files was requested, ask for a confirmation
			case $this->_task == 'confirm_delete_all' :
				$layout = 'confirm_delete_all';
				break;
			// or else use the default layout
			case $this->_task == 'display' :
			default :
				$layout = 'control_panel';
		}
		return $layout;
	}

	// function to get the confirmation message when the data is saved
	function getConfirmationMessage() {
		return JText::_('Configuration saved !');
	}

	// function to delete all tables and files uploaded by aiContactSafe
	function delete_all_accepted() {
		// get the model for the current controller
		$model = &$this->getModel( $this->_sTaskModel, '', $this->_parameters );
		// delete tables and files
		$model->deleteTablesAndFiles();
		// redirect the page after the tables and files were deleted
		$model->resetFormFields();
		$link = 'index.php?option=com_installer&task=manage&type=components';
		$this->setRedirect($link);
	}

	// function to discard all changes and return to the section defined in return_task
	function cancel() {
		$model = &$this->getModel( $this->_sTaskModel, '', $this->_parameters );
		$model->resetFormFields();
		$new_values = array('sTask'=>'default');
		$link = $model->getReturnLink($new_values);
		$this->setRedirect($link);
	}
}

?>