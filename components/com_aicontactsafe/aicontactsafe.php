<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// start the session if no session was started
if ( session_id() == '' ) {
	session_start();
}

// load the main controller
require_once( JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_aicontactsafe'.DS.'controller.php' );

// load the main model
require_once( JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_aicontactsafe'.DS.'models'.DS.'default.php' );

// load the main view
require_once( JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_aicontactsafe'.DS.'views'.DS.'default'.DS.'view.html.php' );

// include the table directory
JTable::addIncludePath(JPATH_ROOT.DS.'components'.DS.'com_aicontactsafe'.DS.'includes'.DS.'tables');

// get the current task, default is 'display'
$task = JRequest::getCmd('task', 'display');
// get the section of the component
$sTask = JRequest::getCmd( 'sTask', '' );

// it the sTask variable is 'default' or '' reset it to 'projects'
if ($sTask == 'default' or $sTask == ''){
	$sTask = 'message';
}

// if a section is selected the coresponding controller is loaded
if (strlen($sTask) > 0){
	require_once( JPATH_COMPONENT.DS.'controllers'.DS.$sTask.'.php' );
}
$controllerName = 'AiContactSafeController'.$sTask;

// generate the parameters for the controller
$controller_parameters = array('task'=>$task,'sTask'=>$sTask);
// load the controller and execute the current task
$controller = new $controllerName($controller_parameters);
$controller->execute( $task );
$controller->redirect();

?>
