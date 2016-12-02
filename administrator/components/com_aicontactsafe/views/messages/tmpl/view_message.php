<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 *
 * added/fixed in version 2.0.1
 * - added link to whois.domaintools.com to see more informations about the sender's IP
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<?php 
	// header of the adminForm
	// don't remove this line
	echo $this->getTmplHeader();
?>

<fieldset class="adminform">
	<legend><?php echo JText::_( 'Message' ); ?></legend>
	<table id="message">
		<tr>
			<td class="key">
				<?php echo JText::_( 'Name' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->name;?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Email' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->email;?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Subject' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->subject;?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Message' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->message;?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Sent to sender' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php
				if ($this->send_to_sender) {
					$img = JURI::root().'administrator/components/com_aicontactsafe/images/ok.gif';
					$alt = JText::_( 'Sent to sender' );
				} else {
					$img = JURI::root().'administrator/components/com_aicontactsafe/images/not_ok.gif';
					$alt = JText::_( 'Not sent to sender' );
				}
				?>
				<img src="<?php echo $img;?>" width="16" height="16" border="0" alt="<?php echo $alt; ?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Profile' ); ?>
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->profile;?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Sender\'s IP' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<a class="aiContactSafe" href="http://whois.domaintools.com/<?php echo $this->sender_ip;?>" target="_blank"><?php echo $this->sender_ip;?></a>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Date added' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo JHTML::_('date', $this->date_added, $this->_config_values['date_format'] ); ?>
			</td>
		</tr>
	</table>
</fieldset>

<?php 
	// footer of the adminForm
	// don't remove this line
	echo $this->getTmplFooter();
?>
