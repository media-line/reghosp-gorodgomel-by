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
<h4>Add / Edit a profile</h4>
<p>This is where you can add / edit a profile.</p>
Use the top right toolbar to save, apply or cancel the information entered into the form.<br/>
<br/>
Here are the instructions for each field in the form :<br />
<br />
<strong><?php echo JText::_( 'Profile name' ); ?></strong><br />
Name of the profile.<br />
<br />
<strong><?php echo JText::_( 'Field used as name' ); ?></strong><br />
Select the field to use as the name of the sender of the email. If <?php echo JText::_( 'Default' ); ?> is selected the default value defined in aiContactSafe's Control Panel will be used.<br />
<br />
<strong><?php echo JText::_( 'Field used as email' ); ?></strong><br />
Select the field to use as the email address of the sender of the email. If <?php echo JText::_( 'Default' ); ?> is selected the default value defined in aiContactSafe's Control Panel will be used.<br />
This can only be an <?php echo JText::_( 'Email' ); ?> or <?php echo JText::_( 'Email - List' ); ?> field type.<br />
<br />
<strong><?php echo JText::_( 'Field used as subject' ); ?></strong><br />
Select the field to use as the subject of the sender of the email. If <?php echo JText::_( 'Default' ); ?> is selected the default value defined in aiContactSafe's Control Panel will be used.<br />
<br />
<strong><?php echo JText::_( 'Field used as send to sender' ); ?></strong><br />
Select the field to determine if the message is sent to the sender or not. If <?php echo JText::_( 'Default' ); ?> is selected the message is not sent to the sender.<br />
<br />
<strong><?php echo JText::_( 'Use AJAX to submit the form' ); ?></strong><br />
Activate ( checked ) or deactivate the use of AJAX to submit the form. This will be automatically activated if you use the form in a plugin or module.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Activate ( checked ) or deactivate the default CSS settings of aiContactSafe in frontend.<br />
<br />
<strong><?php echo JText::_( 'CSS code of the profile' ); ?></strong><br />
Here you can edit the CSS code used with this profile. If you leave it empty no CSS code will be used.<br />
<br />
<strong><?php echo JText::_( 'Contact form width' ); ?></strong><br />
Set the width of the contact form. Set it to 0 to let the browser determine the width.<br />
<br />
<strong><?php echo JText::_( 'Contact information width' ); ?></strong><br />
Set the width of the contact information. Set it to 0 to let the browser determine the width.<br />
If you use the contact form on top of the contact infromation ( or the other way around ) the maximum width of this fields will be used.<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
You have the following options:<br />
<ul>
<strong><em><li><?php echo JText::_( 'Only for unregistered users' ); ?></li></em></strong>
- will display CAPTCHA only if the visitor is not authenticated<br />
<strong><em><li><?php echo JText::_( 'Always' ); ?></li></em></strong>
- will always display CAPTCHA<br />
<strong><em><li><?php echo JText::_( 'Never' ); ?></li></em></strong>
- will never display CAPTCHA<br />
</ul>
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Set the width of the image with the captcha code.<br />
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Set the height of the image with the captcha code.<br />
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Set the background color of the image with the captcha code.<br />
<br />
<strong><?php echo JText::_( 'Captcha background transparent' ); ?></strong><br />
Make the background of the CAPTCHA code transparent.<br />
You'll still have to select a suitable background color because it will appear around the CAPTCHA code like a contour.<br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Set the colors that the image with the captcha code can use. Enter the color separated by ";" and make sure they are visible on the background color.<br />
<br />
<strong><?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?></strong><br />
Activate the generation of random CAPTCHA code. This will stop the CAPTCHA selecting from the words files and will generate the code randomly.<br />
<br />
<strong><?php echo JText::_( 'Mininum word length' ); ?></strong><br />
Set the minimum word legth of the random CAPTCHA code. This is used only when <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?> is activated.<br />
<br />
<strong><?php echo JText::_( 'Maximum word length' ); ?></strong>
Set the maximum word legth of the random CAPTCHA code. This is used only when <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?> is activated.<br />
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Specify the email address to which the contact form information is sent.<br />
If you leave this blank, the default Joomla email address will be used.<br />
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
Force the message to be sent to the email address specified above even if one of the custom fields used by this profile is an email type and the message will be sent to it.<br />
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Specify the text to add in front of the subject in order to easily identify the email.<br />
If you leave this blank, the site name specified in Joomla\' control panel will be used.<br />
<br />
<strong><?php echo JText::_( 'Email mode' ); ?></strong><br />
Select the way the message is sent. In HTML format or plain text.<br />
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Activate ( checked ) or deactivate the recording of the messages into the database.<br />
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Date format of the custom fields of the type date.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
When you use a custom field of type date, the years are presented in a list. This field is controling the minimum year starting from the current year.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
When you use a custom field of type date, the years are presented in a list. This field is controling the maximum year starting from the current year.<br />
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
The character that will mark the required fields. <br />
You can use HTML tags with this, but don't use quotes (") in it.<br />
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Here you can add an address or any other contact information that you think is required in the contact form.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
This field is controlling the way the contact information ( specified in the previous field ) is displayed in frontend. You have the following options :<br />
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?></li></em></strong>
- the contact information will not be displayed<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
- the contact information will be displayed on top of the contact form<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
- the contact information will be displayed on the right side of the contact form<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
- the contact information will be displayed on bottom of the contact form<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
- the contact information will be displayed on the left side of the contact form<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Place a meta description tag on the contact form.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Place a meta keywords tag on the contact form.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
The message to display when the message is succesfully sent.<br />
<br />
<strong><?php echo JText::_( 'Redirect on succes URL' ); ?></strong><br />
Define here the URL where to redirect the page when the message was successfully sent.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Set this profile as the default profile when no profile is specified.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Activate ( checked ) or deactivate this profile.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Select the fields that are used with this profile.<br />
All the fields used as the email parameters ( name, email, subject, send to sender ) have to be selected here.<br />
<br />
</div>
