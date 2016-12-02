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
<h4>Ver uma mensagem</h4>
<p>Isto é onde você pode visualizar uma mensagem.</p>
<p>Use a barra superior direito para fechar esta janela e voltar para a lista mensagens.</p>
<p>Aqui estão as instruções para cada campo no formulário:<br />
    <br />
    <strong><?php echo JText::_( 'Name' ); ?></strong><br />
  O nome do remetente.<br />
    <br />
    <strong><?php echo JText::_( 'Email' ); ?></strong><br />
  O endereço do remetente.<br />
    <br />
    <strong><?php echo JText::_( 'Subject' ); ?></strong><br />
  Assunto da mensagem com o texto adicionado em frente, a fim de identificar facilmente o e-mail.<br />
    <br />
    <strong><?php echo JText::_( 'Message' ); ?></strong><br />
    Mensagem texto com todos os campos personalizados adicionados no aiContactSafe.<br />
    <br />
    <strong><?php echo JText::_( 'Sent to sender' ); ?></strong><br />
  Se esta for verificada, uma cópia da mensagem foi enviada para o remetente.<br />
    <br />
    <strong><?php echo JText::_( 'Sender\'s IP' ); ?></strong><br />
  O IP a partir do qual a mensagem foi enviada.<br />
    <br />
    <strong><?php echo JText::_( 'Date added' ); ?></strong><br />
  A data em que a mensagem foi enviada.<br />
    <br />
</p>
</div>
