<?php
/**
 * SimpleForm
 *
 * @version 1.1.0
 * @package SimpleForm
 * @author ZyX (allforjoomla.com)
 * @copyright (C) 2010 by ZyX (http://www.allforjoomla.com)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 *
 * If you fork this to create your own project,
 * please make a reference to allforjoomla.com someplace in your code
 * and provide a link to http://www.allforjoomla.com
 **/
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>simpleForm</title>
</head>
<body>
<p><?php echo JTEXT::_('Hello');?></p>
<p><?php echo JTEXT::_('Sent from page');?>: <?php echo $url;?>.</p>
<p><?php echo JTEXT::_('Date');?>: <?php echo $date;?>.</p>
<p><?php echo JTEXT::_('User ip');?>: <?php echo $ip;?>.</p>
<table cellpadding="5" cellspacing="0">
<tr>
<th colspan="2"><font size="+1"><?php echo JTEXT::_('Form content');?>:</font></th>
</tr>
<?php print_r($rows);?>
</table>
<p><?php echo 'Дата:';?></p>
<p><?php echo 'Время:';?></p>
<p><?php echo 'Врач:';?></p>
<p><?php echo '<span style="color: red;">В заявке указывайте данные того человека, которому требуется консультация.</span><br/>В случае, если на заявляемое время талонов не будет, Вам предложат талон на имеющееся время.<br/>Ваш запрос будет обработан в течение рабочего дня, ответ придет на Ваш электронный адрес.<br/>Обязательно при визите обращаться в <span style="color: red;">РЕГИСТРАТУРУ</span> консультативной поликлиники, предоставить <span style="color: red;">ПАСПОРТ, НАПРАВЛЕНИЕ</span> (для осуществления бесплатной консультации). В случае отсутствия направления - будет предложен прием на платной основе. В случае отсутствия паспорта - в приеме будет отказано.<br/>Для консультации <span style="color: red;">заведующего отделением</span> на бесплатной основе необходимо предоставить направление с указанием - к заведующему каким отделением Вас направляют. При отсутствии направления будет предложен платный прием.<br/>В соответствии со ст. 44, ст. 18 закона РБ о здравоохранении, несовершеннолетние дети консультируются врачом в присутствии законного представителя (родители). <span style="color: red;">Присутствие одного из родителей обязательно</span>.';?></p>
</body>
</html>