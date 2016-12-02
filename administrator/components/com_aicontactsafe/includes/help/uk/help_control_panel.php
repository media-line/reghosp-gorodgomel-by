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
<p>Інструкції для всіх полів пункту <?php echo JText::_( 'Control Panel' ); ?> : </p>
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте налаштування CSS за замовчуванням у адміністративній частині.<br />
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Відмітьте, якщо бажаєте відображати інструкції допомоги в адміністративній частині.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong><br />
Вкажіть формат дати, що буде використовуватись компонентом для відображення полів дати. Докладінше <a href="http://www.php.net/manual/en/function.strftime.php" target="_blank">http://www.php.net/manual/en/function.strftime.php</a> .<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Cols' ); ?></strong><br />
Встановыть кількість стовпчиків для текстових полів в контактній формі.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Rows' ); ?></strong><br />
Встановыть кількість рядків для текстових полів в контактній формі.<br />
<br />
<strong><?php echo JText::_( 'Default name' ); ?></strong><br />
Вкажіть ім'я за замовчуванням, що буде використано, якщо в полі "<?php echo JText::_( 'Field used as name' ); ?>" вказано значення <?php echo JText::_( 'Default' ); ?> .<br />
Лишіть пустим, щоби використовувати ім'я сайту, вказане у Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default email' ); ?></strong><br />
Вкажіть email за замовчуванням, що буде використано, якщо в полі "<?php echo JText::_( 'Field used as email' ); ?>" вказано значення <?php echo JText::_( 'Default' ); ?> .<br />
Лишіть пустим, щоби використовувати email, вказаний у Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default subject' ); ?></strong><br />
Вкажіть тему за замовчуванням, що буде використано, якщо в полі "<?php echo JText::_( 'Field used as subject' ); ?>" вказано значення <?php echo JText::_( 'Default' ); ?> .<br />
Якщо лишіти пустим, то в префіку теми, вказаний в профайлі, нічого не буде додано.<br />
<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте контроль за SPAM'ом. Це вмикає перевірку повідомлень на присутність вказаних слів. Якщо такі слова віднайдено - повідомлення не буде надіслано.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Вкажіть слова, наявність яких в повідомлення призведе до його розцінювання, як SPAM'у. Використовуйте роздільник між словами ";".<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
Якщо активовано ( відмічено ), то повідомлення, позначені як SPAM, не будуть надіслані, проте зберігатимуться в базі даних.<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте заборону IP-адрес. Якщо активовано, то відвідувачі із вказаних IP-адрес не матимуть доступу до форми зворотнього зв’язку.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />
Вкажіть IP-адреси для заборони. Відділіть IP-адреси крапкою з комою ";". Ви можете використовувати зірочку "*" для вказання цілих підмереж. Наприклад 123.123.*.* заборонить всі IP-адреси, що починаються з 123.123.<br />
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Вкажіть сторінку для перенаправлення заблокованих IP-адрес. За замовчуванням використовується головна сторінку сайту.<br />
<br />
<strong><?php echo JText::_( 'Ban IPs sending messages with blocked words' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте заборону IP-адрес, що надсилають повідомлення з заблокованими словами.<br />
Якщо активовано, то після отримання кількості повідомлень, вказаної в наступному полі, які містять заблоковані слова, IP-адресу, що надсилає ці повідомлення, буде автоматично заблоковано.<br />
<br />
<strong><?php echo JText::_( 'Maximum blocked messages before IP ban' ); ?></strong><br />
Вкажіть кількість повідомлень із заблокованими словами, що ввімкнуть заборону IP.<br />
<br />
<strong><?php echo JText::_( 'Minutes to count the blocked messages' ); ?></strong><br />
Встановіть період часу для підрахунку отриманих повідомлень, що містять заблоковані слова, для заборони IP.<br />
<br />
<strong><?php echo JText::_( 'Email to notify IP ban' ); ?></strong><br />
Вкажіть email-адресу, куди надсилати повідомлення, коли здійснюється блокування IP.<br />
<br />
<strong><?php echo JText::_( 'Upload attachments folder' ); ?></strong><br />
Вкажіть теку, куди вивантажувати файли, прикріплені до повідомлення.<br />
<br />
<strong><?php echo JText::_( 'Maximum attachments size (in bytes)' ); ?></strong><br />
Вкажіть максимальний розмір для файлу приєднання в байтах.(1024 байт = 1 кілобайт; 1048576 байтів = 1 мегабайту; 5242880 байтів = 5 мегабайтам).<br/>
Розмір повинен бути менше або дорівнювати параметру "upload_max_filesize" у файлі конфігурації PHP.INI.<br />
Докладніше на сторінці : <a href="http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize" target="_blank">http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize</a>.<br />
<br />
<strong><?php echo JText::_( 'Allowed attachments types' ); ?></strong><br />
- дозволені типи файлу для вкладення. Використовуйте кому "," для переліку типів.<br />
<br />
<strong><?php echo JText::_( 'Attach to email' ); ?></strong><br />
Вкладення може бути надіслане, як посилання на файл на сервері, або ж приєднане до листа.<br />
Активуйте ( відмічено ) це поле, щоби приєднувати вкладення до листа.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
Якщо ви користуєтесь компонентом Artio для SEO, ви можете ввімкнути/вимкнути плагін Artio в aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
Якщо ви користуєтесь компонентом Joom!Fish для мультимовної підтримки сайту, ви можете ввімкнути/вимкнути контент-елементи aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
Ця кнопка видалить всі таблиці, створені в базі даних цим компонентом. Ця кнопка призначеня для повної деінсталяції компонента.<br />
<font color="red">Алярм !!!<br />
Це знищить всі таблиці компонента aiContactSafe без можливості їх відновлення.</font><br />
<br />
</div>
