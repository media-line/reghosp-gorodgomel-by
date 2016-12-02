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
<h4>Mostrar a mensagem</h4>
<p>Aqui você pode visualizar a mensagem armazenada.</p>
Use a barra de ferramentas para fechar a mensagem e visualizar novamente a lista das mensagens armazenadas.<br/>
<br/>
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Nome do remetente.<br />
<br />
<strong><?php echo JText::_( 'Email' ); ?></strong><br />
Endereço e-mail do remetente.<br/>
<br />
<strong><?php echo JText::_( 'Subject' ); ?></strong><br />
O assunto da mensagem, que o úsuario inseriu no Frontend.<br/>
<br />
<strong><?php echo JText::_( 'Message' ); ?></strong><br />
A mensagem com todos os campos definidos no perfil referente.<br/>
<br />
<strong><?php echo JText::_( 'Send to sender' ); ?></strong><br />
Se este caraterística está ativada, uma cópia foi enviado ao remetente via e-mail.<br/>
<br />
<strong><?php echo JText::_( 'Profile' ); ?></strong><br />
O perfíl utilizado para enviar a mensagem.
<br />
<strong><?php echo JText::_( 'Sender\'s IP' ); ?></strong><br />
O endereço IP do computador, onde o formulário era preenchido.<br/>
<br />
<strong><?php echo JText::_( 'Date added' ); ?></strong><br />
A data quando esta mensagem era armazenada no Frontend (deve ser +/- identico com o envio do e-mail).<br/>
<br />
</div>
