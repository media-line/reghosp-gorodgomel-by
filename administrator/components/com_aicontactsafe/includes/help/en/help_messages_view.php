<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// the instruction will be added here
?>
<div id="aiContactSafe_help_file">
<h4>View a message</h4>
<p>This is where you can view a message.</p>
Use the top right toolbar to close this window and return to the messages list.<br/>
<br/>
Here are the instructions for each field in the form :<br />
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
The name of the sender.<br />
<br />
<strong><?php echo JText::_( 'Email' ); ?></strong><br />
The email address of the sender.<br />
<br />
<strong><?php echo JText::_( 'Subject' ); ?></strong><br />
Subject of the message with the text added in front in order to easily identify the email.<br />
<br />
<strong><?php echo JText::_( 'Message' ); ?></strong><br />
Message text with all the custom fields added in aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Sent to sender' ); ?></strong><br />
If this is checked, a copy of the message was sent to the sender.<br />
<br />
<strong><?php echo JText::_( 'Profile' ); ?></strong><br />
The profile used to send the message.<br />
<br />
<strong><?php echo JText::_( 'Sender\'s IP' ); ?></strong><br />
The IP from which the message was sent.<br />
<br />
<strong><?php echo JText::_( 'Date added' ); ?></strong><br />
The date when the message was sent.<br />
<br />
</div>
