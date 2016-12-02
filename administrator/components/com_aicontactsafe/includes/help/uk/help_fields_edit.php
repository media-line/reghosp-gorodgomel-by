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
<h4>Додати / Редагувати поля</h4>
<p>Тут можна додати / редагувати параметри поля.</p>
Використовуйте панель інструментів праворуч вгорі для збереження, застосування або скасування інформації, введеної у форму.<br/>
<br/>
Тут ідуть інструкції для кожного поля форми :<br />
<br />
<strong><?php echo JText::_( 'Field name' ); ?></strong><br />
Назва поля.<br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
Мітка (label) поля. <br />
Тут ви можете використовувати HTML теги, проте не використовуйте подвійні лапки (") в цьому полі.<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Тут можна вказати параметри HTML тега, що буде згенеровано для мітки поля.<br />
Наприклад, ви можете встановити за допомогою CSS параметрів відображення поля, наприклад: <i>style='border:1px solid red'</i> або <i>width=210</i>.<br />
Дивіться <strong><?php echo JText::_( 'Field parameters' ); ?></strong> для більш докладної інформації.<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Тут ви можете вказати мітку поля для використання в електронному листі.<br />
Тут ви можете використовувати HTML теги, проте не використовуйте подвійні лапки (") в цьому полі.<br />
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Тут можна вказати параметри HTML тега, що буде згенеровано для мітки поля.<br />
Наприклад, ви можете встановити за допомогою CSS параметрів відображення поля, наприклад: <i>style='border:1px solid red'</i> або <i>width=210</i>.<br />
Дивіться <strong><?php echo JText::_( 'Field parameters' ); ?></strong> для більш докладної інформації.<br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Активуйте ( відмічено ) якщо хочете розташувати мітку праворуч поля.<br />
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Оберіть тип поля - один варіант з наступних :<br />
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- короткий текст<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- поле з двома значеннями : true або false<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- випадаючий список<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- довгий текст<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- кілька галочок для вибору<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- лише одне з можливих значень може бути обране<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- поле для введення дати. Для зручнішого введення дати доступний календар.<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- поле для введення email’а адресата.<br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- список мейлів, з яких лише один може бути обраний за адресата<br />
Див. <strong><?php echo JText::_( 'Field values' ); ?></strong> щодо інструкцій, як користуватись цим полем<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- список контактів, наявних у  Joomla, з якого відправник може обрати адресата<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- список користувачів Joomla, з якого відправник може обрати адресата<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- список входжень SOBI2, з якого відправник може обрати адресата<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- це поле не буде відображатися у формі зворотнього зв’язку, проте його можна використовувати для вставки тексту в лист.<br />
Див. <strong><?php echo JText::_( 'Field values' ); ?></strong> щодо інструкцій, як користуватись цим полем<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- додати пропуск між двома полями форми<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- додати файл в лист<br />
</ul>
<br />
<strong><?php echo JText::_( 'Send message' ); ?></strong><br />
Використовується лише для типів полів, що можуть містити email (<?php echo JText::_( 'Email' ); ?>, <?php echo JText::_( 'Email - List' ); ?>, <?php echo JText::_( 'Joomla Contacts' ); ?>, <?php echo JText::_( 'Joomla Users' ); ?>, <?php echo JText::_( 'SOBI2 Entries' ); ?> ).<br />
Якщо активовано ( відмічено ), то повідомлення надсилається на email-адресу, до якої прив'язний тип поля. Ігнорується для решти типів полів.<br />
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
Якщо ви додаєте <strong><?php echo JText::_( 'Combobox' ); ?></strong>, або <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong>, або <strong><?php echo JText::_( 'Radio - List' ); ?></strong>, або <strong><?php echo JText::_( 'Email - List' ); ?></strong>, або <?php echo JText::_( 'Hidden' ); ?>, в цьому місці вказуйте значення для списку.<br />
Для <strong><?php echo JText::_( 'Combobox' ); ?></strong> вкажіть значення розділені ";". Наприклад, для кольорів : червоний;жовтий;зелений;синій;чорний.<br />
Для <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> вкажіть значення розділені ";". Наприклад, для кольорів : червоний;жовтий;зелений;синій;чорний.<br />
Для <strong><?php echo JText::_( 'Radio - List' ); ?></strong> вкажіть значення розділені ";". Наприклад, для кольорів : червоний;жовтий;зелений;синій;чорний.<br />
Для <strong><?php echo JText::_( 'Email - List' ); ?></strong> вкажіть перелік імен і електронних адрес, розділених ";". Використовуйте ":" між кожним іменем і електронною адресою. Наприклад, Служба підтримки:service@algis.ro;Відділ продажів:sales@algis.ro;Александру Добрін:alex@algis.ro.<br />
Для <strong><?php echo JText::_( 'Hidden' ); ?></strong> вкажіть текст, який бажаєте додати в тіло листа.<br />
<br />
<strong><?php echo JText::_( 'Field limit' ); ?></strong><br />
Дозволяє вказати кількість символів, що користувач може вказати в полі.<br />
Ігнорується для типів полів, для яких не має сенсу.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Тут можна вказати параметри HTML тега, що буде згенеровано для цього поля.<br />
Ви можете встановити за допомогою CSS-параметрів відображення поля.
Наприклад: <i>style='width:250px;'</i>. Це вставновить довжину у 250 пікселів.<br />
Ввводьте всі стилі CSS в межах одного параметру style розділені ";". Наприклад: style='width:250px;color:red;'.<br />
Більше інформації про CSS : <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a>.<br />
<br />
<strong><?php echo JText::_( 'Auto fill' ); ?></strong><br />
Тут ви можете вказати, щоби поля наповнювались значеннями з Joomla ( <?php echo JText::_( 'Joomla user name' ); ?> або <?php echo JText::_( 'Joomla user email' ); ?> ), якщо користувач увійшов на сайт.<br />
Оберіть <?php echo JText::_( '- none -' ); ?>, щоби вимкнути опцію.<br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Значення поля за замовчуванням.<br />
Значення за замовчуванням, що можна використовувати для кожного типу поля:
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- текст за замовчуванням<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- 1, якщо ви хочете, щоби поле було відмічене за замовчуванням, 0 - в іншому випадку.<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- позиція у списку, яка має бути обрана за замовчуванням; починаючи з 0 ( 0 для першого варіанту, 1 для другого, 2 для третього і т.д. )<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- текст за замовчуванням<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- список з 1 ( для відмічених ) і 0 ( не відмічених ), розділений крапкою з комою ";" для кожної позиції у списку ( 1;0;0;1 для першого відміченого, другого не відміченого, третього не відміченого, четвертого відміченого )<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- пункт, що має бути обраний за замовчуванням<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- дата у форматі рррр-мм-дд ( рік-місяць-день )<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- email за замовчуванням ( не рекомендовано, оскільки він може бути віднайдений спамерами ) <br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- позиція email’а, що має бути обраним за замовчуванням починаючи з 0 ( 0 для першого, 1 для другого, 2 для третього і т.д. )<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- id контакта<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- id користувача<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- id входження з SOBI2<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- відсутнє<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- відсутнє<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- відсутнє<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Послідовність полів у формі зворотнього зв’язку визначається цим полем.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
Активуйте ( відмічено ), якщо відправник муситиме обов’язково заповнити це поле.<br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Активуйте ( відмічено ) або деактивуйте надсилання цього поля в листі.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Активуйте ( відмічено ) для використання цього поля у формі зворотнього зв’язку.<br />
<br />
</div>
