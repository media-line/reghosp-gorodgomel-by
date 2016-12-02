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
  <h4>Adicionar um formulário </h4>
  <p> Isto é onde você pode adicionar um formulário. </p>
  <p> Use a barra superior direito para salvar, aplicar ou cancelar as informações inseridas no formulário. </p>
  <p> Aqui estão as instruções para cada arquivado na forma:<br />
      <br />
      <strong><?php echo JText::_( 'Name' ); ?></strong><br />
    Nome do formulário.<br />
  <br />
  <strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
    Ative (verificada) ou desactivar as definições do padrão CSS aiContactSafe no frontend.<br />
  <br />
  <strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
    Ativar (marcado) ou desactivar a segurança (captcha) quando a informação é apresentada em frontend. <br />
  <br />
  <strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
    Defina a largura da imagem com o código captcha.<br />
  <br />
  <strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
    Defina a altura da imagem com o código captcha.<br />
  <br />
  <strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
    Definir a cor de fundo da imagem com o código captcha.<br />
  <br />
  <strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
    Defina as cores que a imagem com o código captcha pode utilizar. Digite a cor separados por &quot;;&quot; e certifique-se que são visíveis sobre a cor de fundo. <br />
  <br />
  <strong><?php echo JText::_( 'Email address' ); ?></strong><br />
    Especifique o endereço de email para que o formulário de contato informação é enviada. <br />
    Se você deixar este campo em branco, o padrão Joomla endereço de email será utilizado. <br />
  <br />
  <strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
    Força a mensagem a ser enviada para o endereço acima especificado, mesmo que um dos campos personalizados utilizados por este formulário é um e-mail e escreva a mensagem será enviada para ele. <br />
  <br />
  <strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
    Especifique o texto para acrescentar na frente do sujeito, a fim de identificar facilmente o e-mail. <br />
    Se você deixar este campo em branco, o nome do local especificado no Joomla \ 'painel de controle será utilizado. <br />
  <br />
  <strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
    Ative (verificada) ou desactivar a gravação de mensagens no banco de dados. <br />
  <br />
  <strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
    Data do formato personalizado campos do tipo data.<br />
  <br />
  <strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
    Quando você usa um campo personalizado do tipo data, os anos são apresentados em uma lista. Este campo é o controle da mínima anos, a partir do ano em curso.<br />
  <br />
  <strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
    Quando você usa um campo personalizado do tipo data, os anos são apresentados em uma lista. Este campo é o controle  máximo dos anos, a partir do ano atual.<br />
  <br />
  <strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
    A personagem que irá marcar os campos obrigatórios. <br />
    Você pode usar tags HTML com isso, mas não use aspas ( &quot;) nele.<br />
  <br />
  <strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
    Aqui você pode adicionar um endereço ou quaisquer outras informações para contato que você acha que são necessários no formulário de contato. <br />
  <br />
  <strong><?php echo JText::_( 'Display format' ); ?></strong><br />
    Este campo é controlar a maneira como as informações de contato (especificado no campo anterior) é exibido no frontend. Você tem as seguintes opções: <br />
  </p>
  <ul>
    <strong><em>
      <li><?php echo JText::_( 'Without contact information' ); ?></li>
      </em></strong> - As informações de contato não serão exibidas <br />
    <strong><em>
      <li><?php echo JText::_( 'Contact information on top' ); ?></li>
      </em></strong> - the contact information will be displayed on top of the contact form<br />
    <strong><em>
      <li><?php echo JText::_( 'Contact information on the right side' ); ?></li>
      </em></strong> - As informações de contato será exibido do lado direito do formulário de contato <br />
    <strong><em>
      <li><?php echo JText::_( 'Contact information on bottom' ); ?></li>
      </em></strong> - As informações de contato será exibido na parte inferior do formulário de contato<br />
    <strong><em>
      <li><?php echo JText::_( 'Contact information on the left side' ); ?></li>
      </em></strong> - As informações de contato será exibido no lado esquerdo do formulário de contato<br />
  </ul>
  <br />
  <strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Coloque uma descrição meta tag sobre o formulário de contato.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Coloque palavras-chave sobre o formulário de contato.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
A mensagem para exibir quando a mensagem é enviada com êxito.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Defina esse formulário como o formulário predefinido quando nenhum formulário é especificado.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Ative (verificada) ou desactivar este formulário.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Selecione os campos que são usados com este formulário.<br />
<br />
</div>
