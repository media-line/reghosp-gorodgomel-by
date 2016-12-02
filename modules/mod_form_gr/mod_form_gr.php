<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

global $mainframe;

$document = &JFactory::getDocument();
$renderer = $document->loadRenderer('modules');
$options = array('style' => 'xhtml'); ?>

<div class="mod_form_gr">
	<div class="toggle">Электронное обращение физического лица<span class="arrow_top show">&#9650;</span><span class="arrow_bottom">&#9660;</span></div>
	<div class="form">
		<?php $position = 'form_citizen';
		echo $renderer->render($position, $options, null); ?>
	</div>
</div>

<div class="mod_form_gr">
	<div class="toggle">Электронное обращение юридического лица<span class="arrow_top show">&#9650;</span><span class="arrow_bottom">&#9660;</span></div>
	<div class="form">
		<?php $position = 'form_organization';
		echo $renderer->render($position, $options, null); ?>
	</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.toggle').click(function() {
		if (jQuery(this).siblings('.form').hasClass('show')) { 
			jQuery(this).siblings('.form').removeClass('show');
			jQuery(this).children('.arrow_bottom').removeClass('show');
			jQuery(this).children('.arrow_top').addClass('show');
		} else {
			jQuery(this).siblings('.form').addClass('show');
			jQuery(this).children('.arrow_bottom').addClass('show');
			jQuery(this).children('.arrow_top').removeClass('show');
		}
	});
});
</script>