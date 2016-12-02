<?php
/**
 * @version   $Id$ 2.0.0 0
 * @package   Joomla
 * @copyright  Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license   GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// the instruction will be added here
?>
<div id="aiContactSafe_help_file">
<h4>Просмотр сообщения</h4>
<p>Тут можно просмотреть сообщение.</p>
Используйте панель инструментов справа вверху для чтобы закрити це вікно и повернутись до списка сообщений.<br/>
<br/>
Дальше идут инструкции щодо каждого поля формы :<br />
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Имя отправителя.<br />
<br />
<strong><?php echo JText::_( 'Email' ); ?></strong><br />
Email-адрес отправителя.<br />
<br />
<strong><?php echo JText::_( 'Subject' ); ?></strong><br />
Тема сообщения с текстом, добавленным при заполнении формы во фронтальной части - для более лёгкой идентификации сообщения.<br />
<br />
<strong><?php echo JText::_( 'Message' ); ?></strong><br />
Текст сообщения включительно с добавленными/настроенными в административной части полями.<br />
<br />
<strong><?php echo JText::_( 'Sent to sender' ); ?></strong><br />
Если отмечено, то копия письма была отправлена отправителю.<br />
<br />
<strong><?php echo JText::_( 'Profile' ); ?></strong><br />
Профайл, который используется для отправки сообщения.<br />
<br />
<strong><?php echo JText::_( 'Sender\'s IP' ); ?></strong><br />
IP-адрес, с которого совершалось оправление сообщения.<br />
<br />
<strong><?php echo JText::_( 'Date added' ); ?></strong><br />
Дата отправки сообщения.<br />
<br />
</div>
