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
<h4>Add / Edit a field</h4>
<p>This is where you can add / edit a field.</p>
Use the top right toolbar to save, apply or cancel the information entered into the form.<br/>
<br/>
Here are the instructions for each field in the form :<br />
<br />
<strong><?php echo JText::_( 'Field name' ); ?></strong><br />
Name of the field.<br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
The label of the field.<br />
You can use HTML tags with this, but don't use quotes (") in it.<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Here you can set the parameters of the HTML tag that will be generated for the label of the field.<br />
For example you can set the way the field is displayed using CSS properties.<br />
See <strong><?php echo JText::_( 'Field parameters' ); ?></strong> for more information.<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Here you can specify a different field label to use in the message.<br />
You can use HTML tags with this, but don't use quotes (") in it.<br />
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Here you can set the parameters of the HTML tag that will be generated for the label of the field in the message.<br />
For example you can set the way the field is displayed using CSS properties.<br />
See <strong><?php echo JText::_( 'Field parameters' ); ?></strong> for more information.<br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Activate ( checked ) this if you want to place the label on the right side of the field.<br />
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Select the type of the field. You can choose one of these options :<br />
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- a short text<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- a field with two values : true or false<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- a list of values you want to define<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- a longer text<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- a list of possible values from which to choose<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- a list of possible values from which only one can be chosen<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- request a date. A calendar is available for an easier utilization.<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- request an email to which to send the message.<br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- enter a list of emails from which the sender can choose the destination of his message<br />
See <strong><?php echo JText::_( 'Field values' ); ?></strong> for instructions on how to use this field<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- the list of contacts added in Joomla from which the sender can choose the destination of his message<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- the list of users added in Joomla from which the sender can choose the destination of his message<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- the list of entries in SOBI2 from which the sender can choose the destination of his message<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- a field that will not be displayed on the contact form. You can use it to place a text in all messages.<br />
See <strong><?php echo JText::_( 'Field values' ); ?></strong> for instructions on how to use this field<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- add a space between two fields of the form<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- attach a file to the message<br />
</ul>
<br />
<strong><?php echo JText::_( 'Send message' ); ?></strong><br />
This is only used with the field types that contain an email (<?php echo JText::_( 'Email' ); ?>, <?php echo JText::_( 'Email - List' ); ?>, <?php echo JText::_( 'Joomla Contacts' ); ?>, <?php echo JText::_( 'Joomla Users' ); ?>, <?php echo JText::_( 'SOBI2 Entries' ); ?> ).<br />
If activate ( checked ) the message is sent to the email address that the field type is connected to. It is ignored for the rest of the field types.<br />
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
In case you want to add a <strong><?php echo JText::_( 'Combobox' ); ?></strong> field, a <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> field, a <strong><?php echo JText::_( 'Radio - List' ); ?></strong> field, a <strong><?php echo JText::_( 'Email - List' ); ?></strong> field or a <?php echo JText::_( 'Hidden' ); ?> field, here is where you can add the values to place in the list.<br />
For a <strong><?php echo JText::_( 'Combobox' ); ?></strong> field enter all the values separated by ";". For example for colors : red;yellow;green;blue;black.<br />
For a <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> field enter all the values separated by ";". For example for colors : red;yellow;green;blue;black.<br />
For a <strong><?php echo JText::_( 'Radio - List' ); ?></strong> field enter all the values separated by ";". For example for colors : red;yellow;green;blue;black.<br />
For a <strong><?php echo JText::_( 'Email - List' ); ?></strong> field enter a list with names and email address separated by ";". Use ":" between the name and the email address. For example... Service department:service@algis.ro;Sales department:sales@algis.ro;Alexandru Dobrin:alex@algis.ro.<br />
For a <strong><?php echo JText::_( 'Hidden' ); ?></strong> field enter the text that you want to add in all messages.<br />
<br />
<strong><?php echo JText::_( 'Field limit' ); ?></strong><br />
This will allow you to set a limit of chars a user can enter in a field.<br />
It is ignored for the field types that this limit is irrelevant.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Here you can set the parameters of the HTML tag that will be generated for this field.<br />
For example you can set the way the field is displayed using CSS properties.<br />
I think one of the most used parameters is the width of the field. In order to modify it you can enter this text into the field : style='width:250px;'. This will set the width to 250px.<br />
Enter all the CSS values you want to use in just one style parameter separated by ";". For example... style='width:250px;color:red;'.<br />
You can find here : <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a> more information on CSS.<br />
<br />
<strong><?php echo JText::_( 'Auto fill' ); ?></strong><br />
Here you can select to fill the value of the field with a value from Joomla ( <?php echo JText::_( 'Joomla user name' ); ?> or <?php echo JText::_( 'Joomla user email' ); ?> ) if the user is logged in.<br />
Select <?php echo JText::_( '- none -' ); ?> to disable this feature.<br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Here you can define a default value for the field.<br />
You can use this default values for each field type:
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- default text<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- 1 if you want this field checked by default, 0 or empty otherwise<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- the position of the item you want to be selected by default starting from 0 ( 0 for the first one, 1 for the second, 2 for the third and so on )<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- default text<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- a list with 1 ( for checked ) and 0 ( unchecked ) separated by ; for each item in the list ( 1;0;0;1 for first checked, second unchecked, third unchecked, fourth checked )<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- the item you want to be selected by default<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- a date in the format yyyy-mm-dd ( year-month-day )<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- the default email ( not recommended since it can be found by spammers ) <br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- the position of the email you want to be selected by default starting from 0 ( 0 for the first one, 1 for the second, 2 for the third and so on )<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- the id of the contact<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- the id of the user<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- the id of the SOBI2 entry<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- irelevant<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- irelevant<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- irelevant<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
The fields will be sorted in the contact form using this field.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
Activate ( checked ) this if you want the sender to be forced to complete this field.<br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Activate ( checked ) or deactivate the sending of this field in the message.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Activate ( checked ) this if you want use this field in the contact form.<br />
<br />
</div>
