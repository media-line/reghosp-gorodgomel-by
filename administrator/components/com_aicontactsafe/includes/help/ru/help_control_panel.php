<?php
/**
 * @version   $Id$ 2.0.1 0
 * @package   Joomla
 * @copyright  Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license   GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// the instruction will be added here
?>
<div id="aiContactSafe_help_file">
<p>Инструкции для всех полей пункта <?php echo JText::_( 'Control Panel' ); ?> : </p>
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте настройки CSS по умолчанию в административной части.<br />
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Отметьте, если желаете, отображение инструкций в административной части.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong><br />
Укажите формат даты, который будет использоватьсь компонентом для отображения полей даты. Подробнее <a href="http://www.php.net/manual/en/function.strftime.php" target="_blank">http://www.php.net/manual/en/function.strftime.php</a> .<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Cols' ); ?></strong><br />
Установите колличество столбцов для текстовых полей в контактной форме.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Rows' ); ?></strong><br />
Установите колличество строк для текстовых полей в контактной форме.<br />
<br />
<strong><?php echo JText::_( 'Default name' ); ?></strong><br />
Укажите имя по умолчанию, которое будет использовано, если в поле "<?php echo JText::_( 'Field used as name' ); ?>" указано значение <?php echo JText::_( 'Default' ); ?> .<br />
Оставте пустым, чтобы использовать имя сайта, указанноей в Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default email' ); ?></strong><br />
Укажите email по умолчанию, который будет использовано, если в поле "<?php echo JText::_( 'Field used as email' ); ?>" указано значение <?php echo JText::_( 'Default' ); ?> .<br />
Оставте пустым, чтобы использовать email, указанный в Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default subject' ); ?></strong><br />
Укажите тему по умолчанию, которая будет использована, если в поле "<?php echo JText::_( 'Field used as subject' ); ?>" указано значение <?php echo JText::_( 'Default' ); ?> .<br />
Если оставить пустм, то в префиксу темы, указанной в профайле, ничего не будет добавлено.<br />
<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте контроль за SPAM'ом. Это включает проверку сообщений на присутствие указанных слов. Если такие слова найдены - сообщение не будет отправлено.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Укажите слова, наличие которых в сообщения приведёт к его расцениванию, как SPAM'а. Используйте разделитель между словами ";".<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
Если активировано ( отмечено ), то сообщения, обозначенные как SPAM, не будут отправлены, но будут сохраняться в базе данных.<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте запрет IP-адресов. Если активировано, то посетители с указанными IP-адресами не будут иметь доступа к форме обратной связи.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />
Укажите IP-адреса для запрета. Разделите IP-адреса точкой с запятой ";". Вы можете использовать звёздочку "*" для указания целых подсетей. Например 123.123.*.* запретит все IP-адреса, которые начинаются с 123.123.<br />
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Укажите страницу для перенаправлення заблокированных IP-адресов. По умолчанию используется главная страница сайта.<br />
<br />
<strong><?php echo JText::_( 'Ban IPs sending messages with blocked words' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте запрет IP-адресов, которые отправляют сообщения с заблокированными словами.<br />
Если активировано, то после получения колличества сообщений, указанного в следующем поле, который содержат заблокированные слова, IP-адрес отправителя автоматически заблокируется.<br />
<br />
<strong><?php echo JText::_( 'Maximum blocked messages before IP ban' ); ?></strong><br />
Укажите колличество сообщений с заблокированными словами, которое включает запрет IP.<br />
<br />
<strong><?php echo JText::_( 'Minutes to count the blocked messages' ); ?></strong><br />
Установите период времени для подсчёта полученных сообщений, которые содержат заблокированные слова, для запрета IP.<br />
<br />
<strong><?php echo JText::_( 'Email to notify IP ban' ); ?></strong><br />
Укажите email-адрес, куда отправлять сообщения, когда происходит блокировка IP.<br />
<br />
<strong><?php echo JText::_( 'Upload attachments folder' ); ?></strong><br />
Укажите папку, куда выгружать файлы, присоединённые к сообщениям.<br />
<br />
<strong><?php echo JText::_( 'Maximum attachments size (in bytes)' ); ?></strong><br />
Укажите максимальный размер для файла вложения в байтах.(1024 байт = 1 килобайта; 1048576 байтов = 1 мегабайту; 5242880 байтов = 5 мегабайтам).<br/>
Размер должен быть меньше или равен параметру "upload_max_filesize" в файле конфигурации PHP.INI.<br />
Подробнее на странице : <a href="http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize" target="_blank">http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize</a>.<br />
<br />
<strong><?php echo JText::_( 'Allowed attachments types' ); ?></strong><br />
- разрешённые типы файлов для вложения. Используйте запятую "," для списка типов.<br />
<br />
<strong><?php echo JText::_( 'Attach to email' ); ?></strong><br />
Вложение может быть отправлено, как ссылка на файл на сервере, или же присоединено к письму.<br />
Активируйте (отмечено) это поле, чтобы присоединять вложения к письмам.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
Если вы пользуетесь компонентом Artio для SEO, вы можете вкл./выкл. плагин Artio в aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
Если вы пользуетесь компонентом Joom!Fish для мультиязычной поддержки сайта, вы можете вкл./выкл. контент-элементы aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
Эта кнопка удалит все таблицы, созданные в базе данных этим компонентом. Эта кнопка предназначена для полной деинсталляции компонента.<br />
<font color="red">Achtung panzer !!!<br />
Это удалит все таблицы компонента aiContactSafe без возможности их восстановления.</font><br />
<br />
</div>
