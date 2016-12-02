<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// the instruction will be added here
?>
<div id="aiContactSafe_help_file">
<p>Here are the instructions for each of the fields in <?php echo JText::_( 'Control Panel' ); ?> : </p>
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Activate ( checked ) or deactivate the default CSS settings of aiContactSafe in backend.<br />
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Check this if you want to display help instructions in backend.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong><br />
Enter the date format that will be used by this component to display date fields. See this <a href="http://www.php.net/manual/en/function.strftime.php" target="_blank">http://www.php.net/manual/en/function.strftime.php</a> for more information.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Cols' ); ?></strong><br />
Set the number of colons that an editbox will use in the contact form.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Rows' ); ?></strong><br />
Set the number of rows that an editbox will use in the contact form.<br />
<br />
<strong><?php echo JText::_( 'Default name' ); ?></strong><br />
Set the default name aiContactSafe will use if the field "<?php echo JText::_( 'Field used as name' ); ?>" is left to <?php echo JText::_( 'Default' ); ?> value.<br />
Leave it empty to use the name of the site defined in Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default email' ); ?></strong><br />
Set the default email address aiContactSafe will use if the field "<?php echo JText::_( 'Field used as email' ); ?>" is left to <?php echo JText::_( 'Default' ); ?> value.<br />
Leave it empty to use the default email address of Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default subject' ); ?></strong><br />
Set the default subject aiContactSafe will use if the field "<?php echo JText::_( 'Field used as subject' ); ?>" is left to <?php echo JText::_( 'Default' ); ?> value.<br />
Leaft empty no subject will be added to the prefix of the subject defined in the profile.<br />
<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong><br />
Activate ( checked ) or deactivate the spam control. This will activate the checking of the messages for specified words and in cases where they are found the message is not sent.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Specify the words to check for in order to mark a message as spam. Separate the words with ";".<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
If you activate ( checked ) this the messages marked as spam are not sent, but recorded into the database.<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Activate ( checked ) or deactivate the IP ban. If you activate this the visitors from the specified IPs will not be able to access the contact form.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />
Specify the IPs to ban. Separate the words with ";". You can use "*" to specify an entire class. For example 123.123.*.* will ban all IPs starting with 123.123.<br />
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Specify the page where to redirect the blocked IPs. The home page is used by default.<br />
<br />
<strong><?php echo JText::_( 'Ban IPs sending messages with blocked words' ); ?></strong><br />
Activate ( checked ) or deactivate the banning of the IPs sending messages with blocked words.<br />
If this is activated when ever you get the number of messages with blocked words, specified in the next fields, the IP sending the message will be automatically banned.<br />
<br />
<strong><?php echo JText::_( 'Maximum blocked messages before IP ban' ); ?></strong><br />
Set the number of messages with blocked words that will trigger the banning of the IP.<br />
<br />
<strong><?php echo JText::_( 'Minutes to count the blocked messages' ); ?></strong><br />
Set the period of time to count the messages received with blocked words in order to ban the IP.<br />
<br />
<strong><?php echo JText::_( 'Email to notify IP ban' ); ?></strong><br />
Set the email address where to send a notification when an IP is automatically blocked.<br />
<br />
<strong><?php echo JText::_( 'Upload attachments folder' ); ?></strong><br />
Specify the folder where to upload the files attached to the message.<br />
<br />
<strong><?php echo JText::_( 'Maximum attachments size (in bytes)' ); ?></strong><br />
Specify the maximum size of a file attachment in bytes.(1024 Bytes = 1KByte; 1048576 Bytes = 1 MByte; 5242880 Bytes = 5 MByte).<br/>
The size must be equal to or smaller than the value in the parameter "upload_max_filesize" in your PHP.INI file.<br />
For more information see this page : <a href="http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize" target="_blank">http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize</a>.<br />
<br />
<strong><?php echo JText::_( 'Allowed attachments types' ); ?></strong><br />
File types that can be attached. Use a comma (,) to separate them.<br />
<br />
<strong><?php echo JText::_( 'Attach to email' ); ?></strong><br />
The attachment can either be sent only as a link to the file on the server in the message or it can be attached to the message.<br />
Activate ( checked ) this field to attach the files to the message.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
In case you use Artio for SEO, you can activate/deactivate the Artio plugin of aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
In case you use Joom!Fish for multilingual support, you can activate/deactivate the content elements of aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
This button will delete all the tables generated by this component into the database. It is here to allow you to completely uninstall the component.<br />
<font color="red">Warning !!!<br />
This will delete all the tables of aiContactSafe and you can't recover them after that.</font><br />
<br />
</div>
