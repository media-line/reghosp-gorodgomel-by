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
<h4>Добавить / Редактировать профайл</h4>
<p>Тут вы можете добавить / редактировать профайл.</p>
Используйте панель инструментов справа вверху для сохранения, применения или отмены информации, введённой в форму.<br/>
<br/>
Тут идут инструкции для каждого поля формы :<br />
<br />
<strong><?php echo JText::_( 'Profile name' ); ?></strong><br />
Название профайла.<br />
<br />
<strong><?php echo JText::_( 'Field used as name' ); ?></strong><br />
Выберите поле для использования в качестве имени отправителя письма. Если указано <?php echo JText::_( 'Default' ); ?>, то используется значение, указанное в панели управления aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as email' ); ?></strong><br />
Выберите поле для использования в качестве email-адреса отправителя письма. Если указано <?php echo JText::_( 'Default' ); ?>, то используется значение, указанное в панели управления aiContactSafe.<br />
Это поле может быть только типа <?php echo JText::_( 'Email' ); ?> или <?php echo JText::_( 'Email - List' ); ?>.<br /> 
<br />
<strong><?php echo JText::_( 'Field used as subject' ); ?></strong><br />
Выберите поле для использования в качестве темы письма. Если указано <?php echo JText::_( 'Default' ); ?>, то используется значение, указанное в панели управления aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as send to sender' ); ?></strong><br />
Выберите поле, которое определяет, следует ли отправлять письмо отправителю. Если выбрано <?php echo JText::_( 'Default' ); ?>, то сообщение не отправителю не посылается.<br />
<br />
<strong><?php echo JText::_( 'Use AJAX to submit the form' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте использование AJAX при отправке формы. Автоматически активируется при отправке формы в плагине или модуле.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте CSS-настройки по умолчанию для фронтальной части aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'CSS code of the profile' ); ?></strong><br />
Здесь можно отредактировать код CSS, который будет использован для данного профайла. Если оставить пустым, то CSS применяться не будет.<br />
<br />
<strong><?php echo JText::_( 'Contact form width' ); ?></strong><br />
Установите ширину контактной формы. Укажите 0, чтобы позволить браузеру определять ширину автоматически.<br />
<br />
<strong><?php echo JText::_( 'Contact information width' ); ?></strong><br />
Установите ширину контактной информации. Укажите 0, чтобы позволить браузеру определять ширину автоматически.<br />
Если вы используете контактную форму над контактной информацие (или подобным образом), то будет использована максимальная среди полей формы ширина.<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
Доступны опции:<br />
<ul>
<strong><em><li><?php echo JText::_( 'Only for unregistered users' ); ?></li></em></strong>
- код проверки отображается только для неаутентифицированных пользователей<br />
<strong><em><li><?php echo JText::_( 'Always' ); ?></li></em></strong>
- код проверки отображается всегда<br />
<strong><em><li><?php echo JText::_( 'Never' ); ?></li></em></strong>
- код проверки никогда не отображается<br />
</ul>
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Установите ширину кода проверки ( captcha ).<br />
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Установите высоту кода проверки ( captcha ).<br />
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Установите цвет фона кода проверки ( captcha ).<br />
<br />
<strong><?php echo JText::_( 'Captcha background transparent' ); ?></strong><br />
Установить фон кода проверки прозрачным.<br />
Необходимо выбрать подходящий цвет фона, посокльку он будет определять контур кода проверки. <br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Установите цвета изображения, которые может использовать код проверки ( captcha ).Введите цвета через точку с запятой ";" и удостовертесь, что они видимы на фоне страницы.<br />
<br />
<strong><?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?></strong><br />
Активируйте генерацию случайного кода проверки. Код проверки перестанет использовать слова из соответствующих библиотек и будет генерироваться случайным образом.<br />
<br />
<strong><?php echo JText::_( 'Mininum word length' ); ?></strong><br />
Установите минимальную длину слова для случайного кода проверки.  Используется только, когда активировано <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?>.<br />
<br />
<strong><?php echo JText::_( 'Maximum word length' ); ?></strong>
Установите максимальную длину слова для случайного кода проверки.  Используется только, когда активировано <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?>.<br />
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Укажите email адрес, куда отправлять сообщения из формы обратной связи.<br />
Если оставите пустым, то будет использован адрес Joomla по умолчанию.<br />
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
Отправлять сообщения и на адрес, указанный выше, даже если одно из полей формы имеет тип e-mail и сообщение также будет отправлено согласно этого поля.<br />
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Укажите текст, который будет добавлен перед темой письма - для более простой идентификации писем.<br />
Если оставите пустым, то будет использовано название сайта, указанное в конфигурации Joomla.<br />
<br />
<strong><?php echo JText::_( 'Email mode' ); ?></strong><br />
Выберите формат отправки письма: HTML или простой текст.<br />
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте запись сообщений в БД.<br />
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Формат даты для поля типа дата.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
Когда вы используете собственное поле типа дата, года представляются в виде списка. Это поле контролирует минимальный год, начиная с текущего.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
Когда вы используете собственное поле типа дата, года представляются в виде списка. Это поле контролирует максимальный год, начиная с текущего.<br />
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
Символ или символы, которыми обозначаются необходимые поля. <br />
Вы можете использовать HTML-теги, но не используйте двойные кавычки (").<br />
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Тут можно указать физический адрес или любую другую информацию, которую вы считаете нужной для контактной форми.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
Это поле контролирует образ представления контактной информации (определённой предыдущим полем) во фронтальной части. Доступны опции :<br />
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?></li></em></strong>
- контактную информацию не отображать<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
- контактную информацию отображать вверху формы обратной связи<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
- контактную информацию отображать справа от формы обратной связи<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
- контактную информацию отображать внизу формы обратной связи<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
- контактную информацию отображать слева от формыобратной связи<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Meta-тег description для формы обратной связи.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Meta-тег keywords для формы обратной связи.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
Сообщение для отображения, когда письмо успешно отправлено.<br />
<br />
<strong><?php echo JText::_( 'Redirect on succes URL' ); ?></strong><br />
Укажите ссылку для переадресации после успешной отправки письма.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Использовать этот профайл по умолчанию, когда ни одного профайла не указано.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Активируйте (отмечено) или деактивируйте этот профайл.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Отметьте поля, которые используются для этого профайла.<br />
Все поля, которые используются как параметры email (имя, email-адрес, тема, "послать отправителю") должны быть выбраны тут.<br />
<br />
</div>
