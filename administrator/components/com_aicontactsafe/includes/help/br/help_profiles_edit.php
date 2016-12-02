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
<h4>Adiçionar/Editar um perfil</h4>
<p>Aqui você pode adiçionar/editar as configurações de um perfil.</p>
Use a barra de ferramentas para armazenar, aplicar ou cancelar as modificações.<br/>
<br />
As instruções para cada campo no formulário :<br />
<br />
<strong><?php echo JText::_( 'Profile name' ); ?></strong><br />
Nome do perfíl.<br />
<br />
<strong><?php echo JText::_( 'Field used as name' ); ?></strong><br />
Selecione o campo para usar como nome do remetente do e-mail. Se <?php echo JText::_( 'Default' ); ?> está selecionado vai ser utilizado o valor predefinido no painél de controle do aiContactSafe.<br />
<br />
Isoo só pode ser um <?php echo JText::_( 'Email' ); ?> ou <?php echo JText::_( 'Email - List' ); ?> tipo de campo.<br />
<br />
<strong><?php echo JText::_( 'Field used as subject' ); ?></strong><br />
Selecione o campo para usar como assunto do remetente do e-mail. Se <?php echo JText::_( 'Default' ); ?> está selecionado vai ser utilizado o valor predefinido no painél de controle do aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as send to sender' ); ?></strong><br />
Selecione o campo para determinar se a mensagem vai ser enviada para o remetente ou não. Se <?php echo JText::_( 'Default' ); ?> está selecionado a mensagem não vai ser enviada para om remetente.<br />
<br />
<strong><?php echo JText::_( 'Use AJAX to submit the form' ); ?></strong><br />
Ativar ( marcado ) ou desativar AJAX para salvar o formulário. Isso vai ser ativado automaticamente usando o formulário num plugin ou módulo.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Ativar (marcar) ou desativar o CSS de aiContactSafe no Frontend.<br />
<br />
<strong><?php echo JText::_( 'CSS code of the profile' ); ?></strong><br />
Aqui você pode editar o código CSS utiliyado neste perfíl. Deixano em branco nenhum código CSS vai ser utilizado.<br />
<br />
<strong><?php echo JText::_( 'Contact form width' ); ?></strong><br />
Configurar a largura do formulário de contato. Configurar para 0 para deixar o browser determinar a largura.<br />
<br />
<strong><?php echo JText::_( 'Contact information width' ); ?></strong><br />
Configurar a largura da informação de contato. Configurar para 0 para deixar o browser determinar a largura.<br />
Usando o formulário de contato em cima ou em baixo da informação a largura maxima dos campos vai ser utilizado.<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
Ativar (marcar) ou desativar o código de segurança (captcha) para enviar informações no Frontend.<br />
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Configure a largura (em pixels) da imagem Captcha.<br />
<font color="red">Alerta !!!</font><br />
Confira a aparençia do Captcha por legibilidade. Recomendado é uma largura de 200 px mínima.<br/>
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Configure a altura (em pixels) da imagen Captcha.<br />
<font color="red">Alerta !!!</font><br />
Confira a aparençia do Captcha por legibilidade. Recomendado é uma altura de 55 px mínima.<br/>
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Configure a cor do fundo da imagem Captcha (valor Hex RGB, ex. #FFFFFF).<br />
<br />
<strong><?php echo JText::_( 'Captcha background transparent' ); ?></strong><br />
Deixando o fundo do código CAPTCHA transparente.<br />
Você ainda vai que ter selecionar uma cor de fundo appropriada porque a cor vai aparecer contornando o código CAPTCHA.<br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Configure as cores, que são permitidos para o código Captcha. Separe as cores com ";" e confira, que as são visíveis em cima do fundo (ex. #FF0000;#00FF00;#0000FF).<br/>
<strong><?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?></strong><br />
Ativar a geração de um código de CAPTCHA aleatório. Isso vai para o CAPTCHA selecionando dos arquivos de palavras e gerar o código aleatório.<br />
<br />
<strong><?php echo JText::_( 'Mininum word length' ); ?></strong><br />
Configurar o comprimento mínimo do código aleatório de CAPTCHA. Isso vai ser utilizado somente se <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?> está ativado.<br />
<br />
<strong><?php echo JText::_( 'Maximum word length' ); ?></strong>
Configurar o comprimento maximo do código aleatório de CAPTCHA. Isso vai ser utilizado somente se <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?> is activated.<br />
<br />
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Definir o endereço e-mail, qual deve receber as informações pelo e-mail.<br/>
Deixando em branco, o endereço padrão de Joomla vai receber.<br/>
<font color="red">Alerta!!!</font><br />
Em caso está definido um <strong><?php echo JText::_( 'Field type' ); ?></strong> com os valores seguintes:
<ul>
	<li><?php echo JText::_( 'Email' ); ?></li>
	<li><?php echo JText::_( 'Email - List' ); ?></li>
	<li><?php echo JText::_( 'Joomla Contacts' ); ?></li>
	<li><?php echo JText::_( 'Joomla Users' ); ?></li>
	<li><?php echo JText::_( 'SOBI2 Entries' ); ?></li>
</ul>
somente estes registros escolhidos vão receber a mensagem!<br/>
Se quiser receber <strong>sempre</strong> uma cópia, tem que ativar <strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br/>
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
Assim você força, que você <strong>sempre</strong> vai receber uma cópia da mensagem.<br/>
Normalmente você deve ativar (marcar) esta definição para não perder nenhuma mensagem.<br/>
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Define um texto, que vai ser adiçionado como prefixo na linha de assunto.<br/>
Isso permite a reconhecer facilmente, quando você recebe uma mensagem gerado pelo formulário de contato.<br/>
Deixando em branco, o nome da página do web, que você registrou nas configuraçoes, vai ser utilizado.<br/>
<br />
<strong><?php echo JText::_( 'Email mode' ); ?></strong><br />
Selecione como a mensagem será enviada. No formato HTML ou pleno texto.<br />
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Ativar (marcar) ou desativar armazenagem da mensagem no banco de dados.<br/>
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Define o formato de data, que vai ser utilizado para campos de data.<br/>
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
Utilizando um campo de data no formulário de contato, você pode definir o número dos anos do passado, que devem aparecer. Este campo controla o menor valor do ano a partir do ano atuál.<br/>
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
Utilizando um campo de data no formulário de contato, você pode definir o número dos anos no futuro, que devem aparecer. Este campo controla o maximo valor do ano a partir do ano atuál.<br/>
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
O sinal que marca campos obrigatórios, para o formulário de contato pode ser enviado.<br/>
Você pode usar tags de HTML. Não utilíze (") neles.<br/>
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Aqui você pode registrar informações adiçionaís que também devem aparecer no formulário.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
Aqui você define, onde a <?php echo JText::_( 'Contact information' ); ?> deve aparecer. Você tem as opções seguintes:
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?></li></em></strong>
as informações de contato nao são mostradas (ignoradas).<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
as informações de contato apareçem no começo do formulário.<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
as informações de contato apareçem ao lado direito do formulário (ao lado do formulário).<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
as informações de contato apareçem no fim do formulário.<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
as informações de contato apareçem ao lado esquerda do formulário (ao lado do formulário).<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Registre a <?php echo JText::_( 'Meta description' ); ?>, que deve ser utilizada para este perfil.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Registre as <?php echo JText::_( 'Meta keywords' ); ?>, que devem ser utilizadas para este perfil.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
A mensagem, que apareça apos a mensagem era enviada com sucesso.<br />
<br />
<strong><?php echo JText::_( 'Redirect on succes URL' ); ?></strong><br />
Define here the URL where to redirect the page when the message was successfully sent.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Define este perfil como perfil padrão, se ainda não era definido nenhum perfil.<br/>
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Ativar (marcar) ou desativar este perfil.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Define os campos, que devem ser mostrados no perfil.<br/>

<br />
</div>
