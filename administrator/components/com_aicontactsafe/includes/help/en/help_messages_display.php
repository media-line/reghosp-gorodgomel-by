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
<h4>Messages</h4>
<p>This is where you can see all messages received by AiContactSafe.</p>
Use the to right toolbar to view or delete a message.<br/>
This button can be used only after at least one message is selected from the message list.<br />
You can select one or more message by clicking on the checkbox on the left side of the name of the sender. Click the top checkbox to select all the messages on this page.<br />
<br/>
Click on the priority name to view it.<br/>
<br/>
Enter a partial/entire name of a sender in the textbox placed above the messages list and click <strong><?php echo JText::_( 'Go' ); ?></strong> to filter the messages. Click <strong><?php echo JText::_( 'Reset' ); ?></strong> to remove the filter.<br/>
<br/>
Click on the <strong>header</strong> of any column to modify the order in which the list is presented.<br/>
<br/>
If you activate <strong><?php echo JText::_( 'Activate IP ban' ); ?></strong> from the Control Panel of aiContactSafe you will be able to ban an IP dirrectly from this window. A new button will be activated  ( <?php echo JText::_( 'Ban IP' ); ?> ) for this purpose.<br/>
<br/>
</div>
