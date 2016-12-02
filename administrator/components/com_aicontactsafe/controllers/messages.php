<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the default aiContactSafe controller class
class AiContactSafeControllerMessages extends AiContactSafeController {

	// get the layout to use based on sTask and task
	function getSTaskLayout($sTask = '') {
			switch(true) {
				// in case a message is viewed
				case $this->_task == 'view' :
					$layout = 'view_message';
					break;
				// in case a record is deleted set the delete_record layout
				case $this->_task == 'delete' :
					$layout = 'delete_record';
					break;
				// in case a record is deleted set the delete_record layout
				case $this->_task == 'ban_ip' :
					$layout = 'ban_ip';
					break;
				// or else use the default layout
				case $this->_task == 'display' :
				default :
					$layout = $sTask;
			}
		return $layout;
	}

	// function to controll the task 'ban_ip' - command to ban one or more IPs
	function ban_ip() {
		$this->display();
	}

	// function to get the confirmation message when the data is saved
	function getConfirmationBanIp() {
		return JText::_('IP banned !');
	}

	// function to controll the task 'confirmDelete' - action to delete one or more records from a table
	function confirmBanIp() {
		$model = &$this->getModel( $this->_sTaskModel, '', $this->_parameters );
		$isOK = $model->banIP();
		if ($isOK) {
			$link = $model->getReturnLink();
			$msg = $this->getConfirmationBanIp();
			$msgType = 'message';
		} else {
			$link = $model->getLastLink();
			$msg = $this->_app->_session->get( 'errorMsg:' . $this->_sTask );
			$msgType = 'error';
		}
		$this->setRedirect($link, $msg, $msgType);
	}

}

?>
