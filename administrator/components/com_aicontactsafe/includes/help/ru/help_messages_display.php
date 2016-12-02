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
<h4>Сообщение </h4>
<p>Тут сохраняются все сообщения, полученные через формы AiContactSafe.</p>
Используйте панель инструментов справа вверху для просмотра и удаления сообщений.<br/>
Эти кнопки могут быть использованы, только если выбрано одно или больше сообщений из списка.<br />
Вы можете выбрать одно или несколько полей путём выставления галочек слева от имени отправителя. Установите галочку вверху списка, чтобы выбрать все поля на странице.<br />
<br/>
Нажмите имя отправителя, чтобы просмотреть сообщение.<br/>
<br/>
Введите имя отправителя частично или полностью в текстовое поле над списком и нажмите <strong><?php echo JText::_( 'Go' ); ?></strong> чтобы отфильтровать сообщения. Нажмите <strong><?php echo JText::_( 'Reset' ); ?></strong> для удаления фильтра.<br/>
<br/>
Нажмите <strong>заголовок</strong> любой колонки для упорядочивания списка полей по этой колонке.<br/>
<br/>
Если вы активируете <strong><?php echo JText::_( 'Activate IP ban' ); ?></strong> из панели управления aiContactSafe, вы сможете блокировать IP прямо из этого окна. Для этого будет активирована новая кнопка  ( <?php echo JText::_( 'Ban IP' ); ?> ).<br/>
<br/>
</div>
