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
<h4>Додати / Редагувати профайл</h4>
<p>Тут ви можете додати / редагувати профайл.</p>
Використовуйте панель інструментів праворуч вгорі для збереження, застосування або скасування інформації, введеної у форму.<br/>
<br/>
Тут ідуть інструкції для кожного поля форми :<br />
<br />
<strong><?php echo JText::_( 'Profile name' ); ?></strong><br />
Назва профайла.<br />
<br />
<strong><?php echo JText::_( 'Field used as name' ); ?></strong><br />
Оберіть поле для використання в якості імені відправника листа. Якщо обрано <?php echo JText::_( 'Default' ); ?> , то буде використано значення, вказане в панелі керування aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as email' ); ?></strong><br />
Оберіть поле для використання в якості email-адреси відправника листа. Якщо обрано <?php echo JText::_( 'Default' ); ?> , то буде використано значення, вказане в панелі керування aiContactSafe.<br />
Це поле можу бути лише типу <?php echo JText::_( 'Email' ); ?> або <?php echo JText::_( 'Email - List' ); ?>.<br /> 
<br />
<strong><?php echo JText::_( 'Field used as subject' ); ?></strong><br />
Оберіть поле для використання в якості теми листа. Якщо обрано <?php echo JText::_( 'Default' ); ?> , то буде використано значення, вказане в панелі керування aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as send to sender' ); ?></strong><br />
Оберіть поле, що визначає, чи надсилати листа відправникові, чи ні. Якщо обрано <?php echo JText::_( 'Default' ); ?>, то повідомлення не надсилається відправнику.<br />
<br />
<strong><?php echo JText::_( 'Use AJAX to submit the form' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте використання AJAX при надсиланні форми. Автоматично активується при використанні форми у плагіні чи модулі.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте CSS-налаштування за замовчуванням для фронтальної частини aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'CSS code of the profile' ); ?></strong><br />
Тут можна відредагувати код CSS, що буде використовуватись для цього профайлу. Якщо лишити пустим, то ніякого CSS не буде застосовуватись.<br />
<br />
<strong><?php echo JText::_( 'Contact form width' ); ?></strong><br />
Встановіть ширину контактної форми. Встановіть 0, щоби дозволити бравзеру визначати ширину автоматично.<br />
<br />
<strong><?php echo JText::_( 'Contact information width' ); ?></strong><br />
Встановіть ширину контактної інформації. Встановіть 0, щоби дозволити бравзеру визначати ширину автоматично.<br />
Якщо ви використовуєте контактну форму згори контактної інформації (чи подібним чином), то буде використана максимальна серед полів довжина .<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
Доступні опції:<br />
<ul>
<strong><em><li><?php echo JText::_( 'Only for unregistered users' ); ?></li></em></strong>
- код перевірки відображається лише для не аутентифікованих користувачів<br />
<strong><em><li><?php echo JText::_( 'Always' ); ?></li></em></strong>
- код перевірки відображається завжди<br />
<strong><em><li><?php echo JText::_( 'Never' ); ?></li></em></strong>
- код перевірки ніколи не відображається<br />
</ul>
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Встановіть ширину кода перевірки ( captcha ).<br />
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Встановіть висоту кода перевірки ( captcha ).<br />
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Встановіть колів фону кода перевірки ( captcha ).<br />
<br />
<strong><?php echo JText::_( 'Captcha background transparent' ); ?></strong><br />
Зробити фон коду перевірки прозорим.<br />
Вам необхідно обрати адекватний колір фону, оскільки він буде визначати контур кода перевірки.<br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Встановіть кольори зрображення, який може використовувати код перевірки ( captcha ). Введіть кольори через крапку з комою ";" і переконайтесь що вони видимі на фоні сторінки.<br />
<br />
<strong><?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?></strong><br />
Активувати генерацію випадкового коду перевірки. Коду перевірки перестане використовувати слова із відповідних бібліотек, і код генеруватиметься випадково.<br />
<br />
<strong><?php echo JText::_( 'Mininum word length' ); ?></strong><br />
Встановіть мінімальну довжину слова для випадкового коду перевірки. Використовується лише коли активовано <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?>.<br />
<br />
<strong><?php echo JText::_( 'Maximum word length' ); ?></strong>
Встановіть максимальну довжину слова для випадкового коду перевірки. Використовується лише коли активовано <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?>.<br />
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Вкажіть email адресу куди відправляти повідомлення з форми зворотнього зв’язку.<br />
Якщо залишите пустим, то буде використання адреса Joomla за замовчуванням.<br />
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
Надсилати повідомлення і на адресу, вказану вище, навіть якщо одне з полів форми має тип e-mail і повідомлення також буде надіслано згідно цього поля.<br />
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Вкажіть текст, що буде додано перед темою листа - для простішої ідентифікації листів.<br />
Якщо лишите пустим, то буде використано назву сайту, зазначену в конфігурації Joomla.<br />
<br />
<strong><?php echo JText::_( 'Email mode' ); ?></strong><br />
Виберіть формат надсилання листа: HTML чи простий текст.<br />
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте запис повідомлень в БД.<br />
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Формат дати для полів типу дата.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
Коли ви використовуєте власне поле типу дата, роки подаються у вигляді списку. Це поле контролює мінімальний рік, починаючи з поточного.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
Коли ви використовуєте власне поле типу дата, роки подаються у вигляді списку. Це поле контролює максимальний рік, починаючи з поточного.<br />
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
Символ чи символи, якими позначаються необхідні поля. <br />
Ви можете використовувати HTML-теги, проте не використовуйте подвійних лапок (").<br />
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Тут можна вказати фізичну адресу чи будь-яку іншу інформацію, яку ви вважаєте потрібною для контактної форми.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
Це поле контролює шлях подачі котактної інформації (визначеної попереднім полем) у фронтальній частині. Доступні опції :<br />
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?></li></em></strong>
- контактну інформацію не відображено<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
- контактну інформацію відображено згори форми зворотнього зв’язку<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
- контактну інформацію відображено праворуч форми зворотнього зв’язку<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
- контактну інформацію відображено внизу форми зворотнього зв’язку<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
- контактну інформацію відображено ліворуч форми зворотнього зв’язку<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Meta-тег description для форми зворотнього зв’язку.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Meta-тег keywords для форми зворотнього зв’язку.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
Повідомлення для відображення, коли лист успішно надіслано.<br />
<br />
<strong><?php echo JText::_( 'Redirect on succes URL' ); ?></strong><br />
Вкажіть посилання для переадресації після успішного надсилання листа.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Використовувати цей профайл за замовчуванням, коли жодного профайлу не зазначено.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте цей профайл.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Відмітьте поля, що використовуються для цього профайлу.<br />
Всі поля, що використовуються, як параметр email (ім'я, email-адреса, тема, "надіслати відправнику") мають бути обрані тут.<br />
<br />
</div>
