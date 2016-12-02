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
<p>Aqui você acha uma explicação para cada campo em <?php echo JText::_( 'Control Panel' ); ?> :</p>
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Ativar (marcar) ou desativar o CSS padrão do aiContactSafe no Backend.<br/>
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Ativado vai aparecer a ajuda na coluna direita no Backend.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong><br />
Configure a aparençia dos campos de data na execução deste componente. Mais informações, favor le <a href="http://www.php.net/manual/en/function.strftime.php" target="_blank">http://www.php.net/manual/en/function.strftime.php</a>.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Cols' ); ?></strong><br />
Configurar o número das colunas que o campo da edição vai utilizar no formulário.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Rows' ); ?></strong><br />
Configurar o número das fileiras que o campo da edição vai utilizar no formulário.<br />
<br />
<strong><?php echo JText::_( 'Default name' ); ?></strong><br />
Configurar o nome predefinido aiContactSafe vai utilizar se o campo "<?php echo JText::_( 'Field used as name' ); ?>" está configurado com o valor <?php echo JText::_( 'Default' ); ?>.<br />
Deixar em branco para utilizar o nome da página definido em Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default email' ); ?></strong><br />
Configurar o endereço e-mail predefinido aiContactSafe vai utilizar se o campo "<?php echo JText::_( 'Field used as email' ); ?>" está configurado com o valor <?php echo JText::_( 'Default' ); ?>.<br />
Deixar em branco para utilizar o nome da página definido em Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default subject' ); ?></strong><br />
Configurar o assunto predefinido aiContactSafe vai utilizar se o campo "<?php echo JText::_( 'Field used as subject' ); ?>" está configurado com o valor <?php echo JText::_( 'Default' ); ?>.<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong><br />
Ativar (marcar) ou desativar o controle de SPAM. Ativado, o componente vai fiscalizar mensagens por palavras específicas (veja <b><?php echo JText::_( 'Block messages with' ); ?></b>) e ser o caso <b>não</b> vai ser enviadas pelo e-mail.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Registre as palavras, que indentificam a mensagem como SPAM. Separe as palavras com ";".<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
Ativado (marcado), mensagens identificados como SPAM vão ser armazenados no banco de dados (mensagens SPAM não serem enviados pelo e-mail).<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Ativar (marcar) ou desativar o bloqueio IP. Ativado, <b>nenhum</b> visitante com registro referente (veja <b><?php echo JText::_( 'IPs to ban' ); ?></b>) vai poder acessar seus fomulários de contato.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />Definir os IP para serem bloqueiados. Separe-os com ";". Também pode usar a substituição estrela "*" para bloquear domínios inteiros. Exemplo: 123.123.*.* vai bloquear todos os IP que começam com 123.123.<br/>
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Definir a página para onde os IP bloqueiados vão ser redirecionados. Padrão e o site Iníçio.<br />
<br />
<strong><?php echo JText::_( 'Ban IPs sending messages with blocked words' ); ?></strong><br />
Ativar (marcar) ou desativar o bloqueio IP enviando mensagems com palavras bloqueiadas.<br />
Ativado, em caso recebeu o numero das mensagens definido no proximo campo, o IP enviando a menagem vai ser bloqueiado automaticamente.<br />
<br />
<strong><?php echo JText::_( 'Maximum blocked messages before IP ban' ); ?></strong><br />
Configurar o numero das mensagens contendo palavras bloqueiadas que vai provocar o bloqueio do IP.<br />
<br />
<strong><?php echo JText::_( 'Minutes to count the blocked messages' ); ?></strong><br />
Configurar o período do tempo para contar as mensagens contendo palavras bloqueiadas para bloquear o IP.<br />
<br />
<strong><?php echo JText::_( 'Email to notify IP ban' ); ?></strong><br />
Configurar o endereço e-mail para onde uma notificação vai ser enviada em caso do bloqueio automático de um IP.<br />
<br />
<strong><?php echo JText::_( 'Upload attachments folder' ); ?></strong><br />
Definir a pasta, onde os anexos (arquivos) vão ser armanezados.<br/>
<br />
<strong><?php echo JText::_( 'Maximum attachments size (in bytes)' ); ?></strong><br />
Definir o tamanho maximo para anexos em  Bytes (1024 Bytes = 1KByte; 1048576 Bytes = 1 MByte; 5242880 Bytes = 5 MByte).<br/>
Observe, que este valor não deve ultrapassar o valor "upload_max_filesize" no arquivo PHP.INI.  Mais informações no
<a href="http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize" target="_blank">
http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize</a>.<br />
<br />
<strong><?php echo JText::_( 'Allowed attachments types' ); ?></strong><br />
Os extensões permitidos para anexos. Separe os extensões com virgula (,). Exemplo "jpg,jpeg,gif,png".<br/>
<br />
<strong><?php echo JText::_( 'Attach to email' ); ?></strong><br />
Ativado (marcado), os anexos vão ser enviados juntos com o e-mail ou como link pontando para o arquivo armazenado no servidor.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
Se você use o Artio JoomSEF (SEO), pode ativar o plugin Artio para aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
Se você use Joom!Fish multilingual, você pode tarduzir elementos e mensagens de aiContactSafe também com o Joom!Fish.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
Este ação vai excluir todas as tabelas (e o conteudo deles) do componente aiContactSafe Komponente do banco de dados. Isso permite a excluir o componente inteiramente.<br/>
Em caso de atualização normalmente você só vai precisar <strong>deinstalar</strong> o componente (o que não exclue as tabelas de aiContactSafe do seu banco de dados) e em seguida instalar a versão nova.<br/>
Assim o conteudo existente do aiContactSafe vai ser conservado.<br/>
<font color="red">Alerta !!!<br />
Em caso você exclue as tabelas de aiContactSafe, você não vai poder restaurar-las depois!</font><br />
<br />
</div>
