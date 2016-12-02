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
<<h4>Adiçionar/Editar um campo</h4>
<p>Aqui você pode adiçionar/editar as configurações de um campo.</p>
Use a barra de ferramentas para armazenar, aplicar ou cancelar as modificações.<br/>
<br/>
<strong><?php echo JText::_( 'Field name' ); ?></strong><br />
Nome do campo.<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
O nome do campo.<br />
Você pode usar tags de HTML. Não use (") neles.<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Aqui você pode definir mais parámetros para o tag HTML, que vão ser colocados em volta do tag. Por exemplo pode definir qualidades CSS adiçionais.<br/>
Por demais informações por favor le <strong><?php echo JText::_( 'Field parameters' ); ?></strong>.<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Aqui você pode definir um nome diferente para este campo para usar no e-mail.<br/>
Você pode usar tags de HTML. Não use (").<br/>
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Aqui você pode definir mais parámetros para o tag HTML, que vão ser colocados em volta do tag. Por exemplo pode definir qualidades CSS adiçionais.<br/>
Por demais informações por favor le <strong><?php echo JText::_( 'Field parameters' ); ?></strong>.<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Ativar (marcar) se o nome do campo deve aparecer ao lado direito do campo. Padrão é esquerda.<br/>
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Selecione o tipo do campo. Os seguintes estão disponíveis:<br/>
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong>
<br />texto curto (1 linha).</li>
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong>
<br />um campo com dois valores : verdade (true) oder falso (false).</li>
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong>
<br />uma lista de valores numa Select-Box. Somente um registro pode ser escolhido.</li>
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong>
<br />texto comprido (mais linhas).</li>
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong>
<br />uma lista de valores como Checkbox. Uma escolha multipla é possivel.</li>
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong>
<br />uma lista de valores possíveis, de que somente um pode ser escolhido.</li>
<li><strong><?php echo JText::_( 'Date' ); ?></strong>
<br />Campo de data. Um calendário para facilitar a escolha está disponível.</li>
<li><strong><?php echo JText::_( 'Email' ); ?></strong>
<br />Um endereço de e-mail está obrigatório para enviar este e-mail.</li>
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong>
<br/>uma lista pre-definida com nomes e endereços e-mail, de que o úsuario pode escolher um recipiente, quem vai receber a mensagem pelo e-mail.</li>
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong>
<br/>uma lista dos todos os contatos de Joomla, de que o úsuario pode escolher um recipiente, quem vai receber a mensagem pelo e-mail.</li>
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong>
<br/>uma lista dos todos os úsuarios de Joomla, de que o úsuario pode escolher um recipiente, quem vai receber a mensagem pelo e-mail.</li>
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong>
<br/>uma lista de registros de SOBI2, de que o úsuario pode escolher um recipiente, quem vai receber a mensagem pelo e-mail.</li>
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong>
<br />um campo obfuscado no formulário de contato. Aqui pode fornecer um texto, que vai aparecer em todas as mensagens.<br />
Veja <strong><?php echo JText::_( 'Field values' ); ?></strong> para instruções de uso para esse campo</li>
<li><strong><?php echo JText::_( 'Separator' ); ?></strong>
<br/>Insere um margem entre dois campos</li>
<li><strong><?php echo JText::_( 'File' ); ?></strong>
<br />adiçione um arquivo a mensagem.</li>
</ul>
<br />
<strong><?php echo JText::_( 'Send message' ); ?></strong><br />
Isso é utilizado somente nos tipos de campo que contem um e-mail (<?php echo JText::_( 'Email' ); ?>, <?php echo JText::_( 'Email - List' ); ?>, <?php echo JText::_( 'Joomla Contacts' ); ?>, <?php echo JText::_( 'Joomla Users' ); ?>, <?php echo JText::_( 'SOBI2 Entries' ); ?> ).<br />
Ativado ( marcado ) a mensagem vai ser enviada para o endereço de e-mail com que o campo está conecatdo. Está ignorado para os réstantes tipos de campo.<br />
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
Para os tipos de campo seguintes você pode definir um (ou vários) valores:
<ul>
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
</ul>
Para um campo <strong><?php echo JText::_( 'Combobox' ); ?></strong> coloque todos os valores separados com ";". Por exemplo tamanhos: XXL;XL;L;S;XS .<br/>
Para um campo <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> coloque todos os valores separados com ";". Por exemplo cores: vermelho;amarelo;verde;azul .<br/>
Para um campo <strong><?php echo JText::_( 'Radio - List' ); ?></strong> coloque todos os valores separados com ";". Por exemplo qualificaçaõ: excelente;bom;mal.<br/>
Para um campo <strong><?php echo JText::_( 'Email - List' ); ?></strong> coloque todos os valores separados com ";".  Use o ":" entre nome e endereço de e-mail. Por exemplo: Support:service@algis.ro;Vendas:sales@algis.ro;Alexandru Dobrin:alex@algis.ro.<br />
Para um campo <strong><?php echo JText::_( 'Hidden' ); ?></strong> registre o texto, que você pretende adiçionar as todas as mensagens.<br />
<br />
<strong><?php echo JText::_( 'Field limit' ); ?></strong><br />
Isso permite configurar uma certa limitação de número das letras um úsuario pode colocar em um campo.<br />
Está ignorado para tipos de campo onde esta limitação é irrelevante.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Aqui você pode definir os parámetros para o campo.<br/>
Como exemplo você pode definir as qualidades de CSS para aparénçia de um campo<br/>
Um dos parámetros mais frequentes é a largura do campo. Para modificar esta qualidade, você pode usar o valor seguinte nesse campo: style='width:250px;' . Isso vai configurar a largura para 250px.<br/>  
Use todos parámetros de CSS num parámetro de STYle, separados por ";". Por exemplo : style='width:250px;color:red;' . <br/>
Para demais informações , favor le o artigo seguinte: <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a>.<br/>
<strong><?php echo JText::_( 'Auto fill' ); ?></strong><br />
Aqui você pode selecionar preencher o valor do campo com um valor do Joomla ( <?php echo JText::_( 'Joomla user name' ); ?> or <?php echo JText::_( 'Joomla user email' ); ?> ) se o úsuario está logged-in.<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Aqui você pode pre-definir um valor. Este valor vai ser pre-selecionado para este campo no formulário.<br />
Para os campos seguintes você pode pre-definir um valor:

<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong><br />
Texto padraõ</li>
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong><br />
1 (numero 1) para ativar o tal Checkbox, 0 (numero 0) para desativar.</li>
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong><br />
a posição na lista para o valor pre-definido. Começando com 0 (0 para primeiro registro, 1 para o segundo, 2 para o terçeiro, etc.).</li>
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
Texto padrão<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong><br/>
uma lista com 1 (ativado) e 0 (não ativado) separado com ";" para cada registro. Por exemplo 1;0;0;1 (1° valor ativado, 2° valor não ativado, 3° valor não ativado, 4° valor ativado).</li>
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
o Radiobox que deve ser pre-selecionado (o valor do campo da lista).<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong><br />
uma data no formato aaaa-mm-dd (ano-mês-dia)</li>
<li><strong><?php echo JText::_( 'Email' ); ?></strong><br/>
um endereço de e-mail padrão (não recomendável, porque vai ser achado por spammers)</li>
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
a posição da lista, começando con  (0 0 para primeiro registro, 1 para o segundo, etc.).<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong><br/>
o ID do contato.</li>
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong><br/>
o ID do úsuario</li>
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong><br />
o ID do registro de SOBI2</li>
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- não relevante<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- não relevante<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- não relevante<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Com este campo você pode definir uma sequençia dos campos no fomulário de contato.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
Ativado (marcado) este campo do formulário de contato tem que ser preenchido pelo usuário.
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Ative (marque) essa opção para mostrar o campo no e-mail.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Ativado (marcado) este campo do formulário de contato vai ser utilizado.<br/>
<br />
</div>