<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<?php 
	// header of the adminForm
	// don't remove this line
	echo $this->getTmplHeader();
?>

<script type="text/javascript" language="javascript">
	function checkFields( all ) {
		var count_fields = document.getElementById('select_fields_count').value;
		for (i = 0; i < count_fields; i++) {
			if ( document.getElementById('select_field_'+i) ) {
				if ( all ) {
					document.getElementById('select_field_'+i).checked = false;
				}
				document.getElementById('select_field_'+i).disabled = all
			}
		}
		if ( document.getElementById('select_all') ) {
			document.getElementById('select_all').disabled = all
		}
		if ( document.getElementById('select_none') ) {
			document.getElementById('select_none').disabled = all
		}
	}
	function changeAll( checked ) {
		var count_fields = document.getElementById('select_fields_count').value;
		for (i = 0; i < count_fields; i++) {
			if ( document.getElementById('select_field_'+i) ) {
				document.getElementById('select_field_'+i).checked = checked;
			}
		}
	}
</script>

<fieldset class="adminform">
	<legend><?php echo JText::_( 'Profile' ); ?></legend>
	<table id="type">
		<tr>
			<td class="key">
				<?php echo JText::_( 'Profile name' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="name" id="name" value="<?php echo $this->name;?>" />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Field used as name' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->comboField_name; ?>&nbsp;<?php echo $this->selected_fields_info; ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Field used as email' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->comboField_email; ?>&nbsp;<?php echo $this->selected_fields_info; ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Field used as subject' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->comboField_subject; ?>&nbsp;<?php echo $this->selected_fields_info; ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Field used as send to sender' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->comboField_send_to_sender; ?>&nbsp;<?php echo $this->selected_fields_info; ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Use AJAX to submit the form' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="checkbox" type="checkbox" name="use_ajax" id="use_ajax" value="1" <?php echo ($this->use_ajax)?'checked':''; ?>  />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Use aiContactSafe CSS in frontend' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="checkbox" type="checkbox" name="use_message_css" id="use_message_css" value="1" <?php echo ($this->use_message_css)?'checked':''; ?>  />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'CSS code of the profile' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<textarea name="profile_css_code" id="profile_css_code" cols="60" rows="6"><?php echo $this->profile_css_code; ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Contact form width' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="contact_form_width" id="contact_form_width" value="<?php echo $this->contact_form_width;?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Contact information width' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="contact_info_width" id="contact_info_width" value="<?php echo $this->contact_info_width;?>" />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Use security code (captcha) in frontend' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->comboUseCaptcha; ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Captcha width' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="captcha_width" id="captcha_width" value="<?php echo $this->captcha_width;?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Captcha height' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="captcha_height" id="captcha_height" value="<?php echo $this->captcha_height;?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Captcha background color' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="captcha_bgcolor" id="captcha_bgcolor" value="<?php echo $this->captcha_bgcolor;?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Captcha background transparent' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="checkbox" name="captcha_backgroundTransparent" id="captcha_backgroundTransparent" value="1" <?php echo $this->captcha_backgroundTransparent?'checked="checked"':''; ?> />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Captcha colors' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="captcha_colors" id="captcha_colors" value="<?php echo $this->captcha_colors;?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="checkbox" type="checkbox" name="use_random_letters" id="use_random_letters" value="1" <?php echo ($this->use_random_letters)?'checked':''; ?>  />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Mininum word length' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="min_word_length" id="min_word_length" value="<?php echo $this->min_word_length; ?>"  />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Maximum word length' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="max_word_length" id="max_word_length" value="<?php echo $this->max_word_length; ?>"  />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Email address' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="email_address" id="email_address" value="<?php echo $this->email_address; ?>"  />&nbsp;<?php echo JHTML::_('tooltip', JText::_( "Leave blank to use the default one in joomla" )); ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Always send to this email address' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="checkbox" type="checkbox" name="always_send_to_email_address" id="always_send_to_email_address" value="1" <?php echo ($this->always_send_to_email_address)?'checked':''; ?>  />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Email subject prefix' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="subject_prefix" id="subject_prefix" value="<?php echo $this->subject_prefix; ?>"  />&nbsp;<?php echo JHTML::_('tooltip', JText::_( "Leave blank to use the site name" )); ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Email mode' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->comboEmail_mode; ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Record the messages in the database' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="checkbox" type="checkbox" name="record_message" id="record_message" value="1" <?php echo ($this->record_message)?'checked':''; ?>  />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Custom field date format' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php echo $this->comboField_custom_date_format; ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Number of years to go back' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="custom_date_years_back" id="custom_date_years_back" value="<?php echo $this->custom_date_years_back; ?>"  />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Number of years to go forward' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="custom_date_years_forward" id="custom_date_years_forward" value="<?php echo $this->custom_date_years_forward; ?>"  />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Mark required fields character' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="required_field_mark" id="required_field_mark" value="<?php echo $this->required_field_mark; ?>"  />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Contact information' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<?php
					$editor =& JFactory::getEditor();
					echo $editor->display('contact_info', $this->contact_info, '550', '400', '60', '20', false);
				?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Display format' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<select name="display_format" id="display_format" class="inputbox" size="1">
					<option value="0" <?php echo ($this->display_format == 0)?'selected':''; ?> ><?php echo JText::_( 'Without contact information' ); ?></option>
					<option value="1" <?php echo ($this->display_format == 1)?'selected':''; ?> ><?php echo JText::_( 'Contact information on top' ); ?></option>
					<option value="2" <?php echo ($this->display_format == 2)?'selected':''; ?> ><?php echo JText::_( 'Contact information on the right side' ); ?></option>
					<option value="3" <?php echo ($this->display_format == 3)?'selected':''; ?> ><?php echo JText::_( 'Contact information on bottom' ); ?></option>
					<option value="4" <?php echo ($this->display_format == 4)?'selected':''; ?> ><?php echo JText::_( 'Contact information on the left side' ); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Activate plugins on the contact information' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="checkbox" type="checkbox" name="plg_contact_info" id="plg_contact_info" value="1" <?php echo ($this->plg_contact_info)?'checked':''; ?>  />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Meta description' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<textarea name="meta_description" id="meta_description" cols="60" rows="6"><?php echo $this->meta_description; ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Meta keywords' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<textarea name="meta_keywords" id="meta_keywords" cols="60" rows="6"><?php echo $this->meta_keywords; ?></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Thank you message' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="thank_you_message" id="thank_you_message" value="<?php echo $this->thank_you_message; ?>"  />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Redirect on succes URL' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="textbox" type="text" name="redirect_on_success" id="redirect_on_success" value="<?php echo $this->redirect_on_success; ?>"  />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Default' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="checkbox" type="checkbox" name="set_default" id="set_default" value="1" <?php echo ($this->set_default)?'checked':'' ?> />
			</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Published' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<input class="checkbox" type="checkbox" name="published" id="published" value="1" <?php echo ($this->published)?'checked':'' ?> />
			</td>
		</tr>
		<tr>
			<td colspan="3" class="space">&nbsp;</td>
		</tr>
		<tr>
			<td class="key">
				<?php echo JText::_( 'Fields' ); ?>:
			</td>
			<td class="space">&nbsp;</td>
			<td class="value">
				<table id="select_fields" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td><?php echo JText::_( 'All' ); ?></td>
						<td>&nbsp;</td>
						<td><input class="checkbox" type="checkbox" name="all_fields" class="select_fields" id="all_fields" value="1" <?php echo ($this->all_fields)?'checked':'' ?> onchange="checkFields(this.checked)" /></td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<?php foreach($this->select_fields as $i=>$field) { ?>
					<tr>
						<td><?php echo $field['name'] . ((strlen(trim($field['field_label'])) > 0)?' - ' . $field['field_label']:''); ?></td>
						<td>&nbsp;</td>
						<td><input class="checkbox" type="checkbox" name="select_fields[]" class="select_fields" id="select_field_<?php echo $i; ?>" value="<?php echo $field['id']; ?>" <?php echo (($field['selected'])?'checked':'') ?> /></td>
					</tr>
					<?php } ?>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" align="right"><input type="button" name="select_all" id="select_all" value="<?php echo JText::_( 'Select all' ); ?>" onClick="changeAll(true)" />&nbsp;&nbsp;&nbsp;<input type="button" name="select_none" id="select_none" value="<?php echo JText::_( 'Select none' ); ?>" onClick="changeAll(false)" /></td>
					</tr>
				</table>
				<input type="hidden" value="<?php echo count($this->select_fields); ?>" id="select_fields_count" />
			</td>
		</tr>
	</table>
</fieldset>

<script type="text/javascript" language="javascript">
	checkFields( document.getElementById('all_fields').checked );
</script>
	
<?php 
	// footer of the adminForm
	// don't remove this line
	echo $this->getTmplFooter();
?>
