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
<h4>Добавить / Редактировть поля</h4>
<p>Тут можно добавить / редактировать параметры поля.</p>
Используйте панель инструментов справа вверху для сохранения, применения или отмены информации, введённой в форму.<br/>
<br/>
Далее идут инструкции для каждого поля формы :<br />
<br />
<strong><?php echo JText::_( 'Field name' ); ?></strong><br />
Название поля.<br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
Метка (label) поля. <br />
Тут вы можете использовать HTML теги, но не используйте двойные кавычки (") в этом поле.<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Тут можно указать параметры HTML тега, который будет сгенерирован для метки поля.<br />
Вы можете установить с помощью CSS параметров стиль отображения поля, например: <i>style='border:1px solid red'</i> или <i>width=210</i>.<br />
Смотрите <strong><?php echo JText::_( 'Field parameters' ); ?></strong> для более широкой информации.<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Тут вы можете указать метку поля для использования в электронном письме.<br />
Тут вы можете использовать HTML теги, но не используйте двойные кавычки (") в этом поле.<br />
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Тут можно указать параметры HTML тега, который будет сгенерирован для метки поля.<br />
Вы можете установить с помощью CSS параметров стиль отображения поля, например: <i>style='border:1px solid red'</i> или <i>width=210</i>.<br />
Смотрите <strong><?php echo JText::_( 'Field parameters' ); ?></strong> для более широкой информации.<br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Активируйте (отмечено) если хотите разместить метку справа от поля.<br />
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Выберите тип поля - один вариант из следующих :<br />
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- короткий текст<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- поле с двумя значениями : true или false<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- выпадающий список<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- длинный текст<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- несколько галочек для выбора<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- только одно из возможных значений может быть выбрано<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- поле для введения даты. Для более удобного введения даты доступен календарь.<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- поле для введения email’а адресата.<br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- список мейлов, из которых только один может быть выбран адресатом<br />
См. <strong><?php echo JText::_( 'Field values' ); ?></strong> касательно инструкций, как пользоваться этим полем<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- список контактов, присутствующих в Joomla, из которого отправитель может выбрать адресата<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- список пользователей Joomla, из которого отправитель может выбрать адресата<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- список вхождений SOBI2, из которого отправитель может выбрать адресата<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- это поле не будет отображаться в форме обратной связи, но его можно использовать для вставки текста в письмо.<br />
См. <strong><?php echo JText::_( 'Field values' ); ?></strong> касательно инструкций, как пользоваться этим полем<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- добавить пропуск между двумя полями форми<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- добавить файл в письмо<br />
</ul>
<br />
<strong><?php echo JText::_( 'Send message' ); ?></strong><br />
Используется только для типов полей, которые могут содержать email (<?php echo JText::_( 'Email' ); ?>, <?php echo JText::_( 'Email - List' ); ?>, <?php echo JText::_( 'Joomla Contacts' ); ?>, <?php echo JText::_( 'Joomla Users' ); ?>, <?php echo JText::_( 'SOBI2 Entries' ); ?> ).<br />
Если активировано ( отмечено ), то сообщение отправляется на email-адрес, к которому привязан тип поля. Игнорируется для остальных типов полей.<br />
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
Если вы добавляете <strong><?php echo JText::_( 'Combobox' ); ?></strong>, или <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong>, или <strong><?php echo JText::_( 'Radio - List' ); ?></strong>, или <strong><?php echo JText::_( 'Email - List' ); ?></strong>, или <?php echo JText::_( 'Hidden' ); ?>, в этом месте указывайте значения для списка.<br />
Для <strong><?php echo JText::_( 'Combobox' ); ?></strong> укажите значения через ";". Например, для цветов : красный;жёлтый;зелёный;синий;чёрный.<br />
Для <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> укажите значения через ";". Например, для цветов : красный;жёлтый;зелёный;синий;чёрный.<br />
Для <strong><?php echo JText::_( 'Radio - List' ); ?></strong> укажите значения через ";". Например, для цветов : красный;жёлтый;зелёный;синий;чёрный.<br />
Для <strong><?php echo JText::_( 'Email - List' ); ?></strong> укажите список имён и электронных адресов, разделённых ";". Используйте ":" между каждым именем и электронным адресом. Например, Служба поддержки:service@algis.ro;Отдел продаж:sales@algis.ro;Александру Добрин:alex@algis.ro.<br />
Для <strong><?php echo JText::_( 'Hidden' ); ?></strong> укажите текст, который желаете добавить в тело письма.<br />
<br />
<strong><?php echo JText::_( 'Field limit' ); ?></strong><br />
Позволяет указать колличество символов, которые пользователь может ввести в поле.<br />
Игнорируется для типов полей, для которых не имеет смысла.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Тут можно указать параметры HTML тега, который будет сгенерирован для этого поля.<br />
Вы можете установить с помощью CSS-параметров стиль отображения поля.
Например: <i>style='width:250px;'</i>. Это установит длину в 250 пикселей.<br />
Вводите все стили CSS в рамках одного параметра style через ";". Например: style='width:250px;color:red;'.<br />
Больше информации про CSS : <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a>.<br />
<br />
<strong><?php echo JText::_( 'Auto fill' ); ?></strong><br />
Тут вы можете указать, чтобы поля заполнялись значениями из Joomla ( <?php echo JText::_( 'Joomla user name' ); ?> или <?php echo JText::_( 'Joomla user email' ); ?> ), если пользователь вошёл в сайт.<br />
Выберите <?php echo JText::_( '- none -' ); ?>, чтобы отключить опцию.<br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Значення поля по умолчанию.<br />
Значення по умолчанию, которые можно использовать для каждого типа поля:
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- текст по умолчанию<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- 1, если вы хотите, чтобы поле було отмечено по умолчанию, 0 - в другом случае.<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- позиция в списке, которая должна быть выбрана по умолчанию; начиная с 0 ( 0 для первого варианта, 1 для второго, 2 для третьего и т.д. )<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- текст по умолчанию<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- список из 1 ( для отмеченных ) и 0 ( не отмеченных ), разделённый точкой с запятой ";" для каждой позиции в списке ( 1;0;0;1 для первого отмеченого, второго не отмеченого, третьего не отмеченого, четвертого отмеченого )<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- пункт, который изменено быть выбран по умолчанию<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- дата в формате гггг-мм-дд ( год-месяц-день )<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- email по умолчанию ( не рекомендовано, поскольку он может быть найден спамерами ) <br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- позиция email’а, который изменено быть выбран по умолчанию начиная с 0 ( 0 для первого, 1 для второго, 2 для третьего и т.д. )<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- id контакта<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- id пользователя<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- id вхождения из SOBI2<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- отсутствует<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- отсутствует<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- отсутствует<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Последовательность полей в форме обратной связи обозначается этим полем.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
Активируйте (отмечено), если отправитель должен обязательно заполнить это поле.<br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте отправку этого поля в письме.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Активируйте (отмечено) для использования этого поля в форме обратной связи.<br />
<br />
</div>
