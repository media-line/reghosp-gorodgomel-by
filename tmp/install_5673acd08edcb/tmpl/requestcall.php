<?php  		defined('_JEXEC') or die; 		$doc = JFactory::getDocument();	$doc->addScript('/modules/mod_requestcall/assets/js/requestcall.js');		//формирование сообщений для вывода	$empty_phone = JText::_('MOD_REQUESTCALL_STATUS_ERROR_EMPTYPHONE');	$incorrect_phone = JText::_('MOD_REQUESTCALL_STATUS_ERROR_PHONE');	$error_sending = JText::_('MOD_REQUESTCALL_STATUS_ERROR_SEND');	$successful_sending = JText::_('MOD_REQUESTCALL_STATUS_SUCCESSFULSEND');?><script type="text/javascript"></script><div class="uk-margin-medium-top uk-top-form">		<p class="uk-h2 uk-text-medium uk-text-center">Закажите звонок</p>	<div id="<?php echo 'messages-'.$module->id;?>" ></div>	<form class="uk-form" method="post" action="" id="<?php echo 'requestform-'.$module->id;?>">		<fieldset data-uk-margin>						<div class="uk-form-row">				<input id="<?php echo 'phone-'.$module->id;?>" value="" name="phone" type="text" placeholder="Телефон" class="uk-form-width-large uk-form-field-phone"></input>			</div>						<div class="uk-form-row">				<input id="<?php echo 'name-'.$module->id;?>" value="" name="name" type="text" placeholder="Имя" class="uk-form-width-large uk-form-field-phone"></input>			</div>			<div class="uk-form-row uk-text-center uk-margin-top">				<div class="uk-inline-block">					<div class="" id="recaptcha2"></div>				</div>			</div>						<div class="uk-form-row uk-text-center">				<button id="<?php echo 'sendform-'.$module->id;?>" onclick="requestcall('<?php echo $empty_phone;?>','<?php echo $incorrect_phone;?>','<?php echo $error_sending;?>','<?php echo $successful_sending;?>','<?php echo $params->get('disable_button');?>','<?php echo $module->id;?>')" type="submit" class="uk-button uk-text-large uk-margin-large-top">Заказать</button>			</div>					</fieldset>	</form></div>