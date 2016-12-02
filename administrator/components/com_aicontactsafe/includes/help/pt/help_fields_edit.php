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
  <h4>Adicione um novo campo </h4>
  <p>Isto é onde você pode adicionar um novo campo. </p>
  Use a barra superior direito para salvar, aplicar ou cancelar as informações inseridas no formulário. <br/>
  <br/>
Aqui estão as instruções para cada campo no formulário: <br />
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Nome do novo campo. <br />
<font color="red">Aviso! </font><br />
Isto não pode ser modificado para os campos &quot;nome&quot;, &quot;email&quot;, &quot;sujeito&quot; e &quot;send_to_sender&quot;. <br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
O rótulo do campo.<br />
Você pode usar tags HTML com isso, mas não use aspas ( &quot;) nele. <br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Aqui você pode definir os parâmetros da tag HTML que será gerado para o rótulo do campo. <br />
Por exemplo, você pode definir a forma como o campo é exibido usando propriedades CSS . <br />
Ver <strong><?php echo JText::_( 'Field parameters' ); ?></strong> para mais informações. <br />
<font color="red">Aviso!</font><br />
Utilize apenas apóstrofos ( ') neste campo. Não use aspas ( &quot;) ou as configurações não irão funcionar.<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Aqui você pode especificar um campo diferente etiqueta para usar na mensagem. <br />
Você pode usar tags HTML com isso, mas não use aspas ( &quot;) nele. <br />
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Aqui você pode definir os parâmetros da tag HTML que será gerado para o rótulo do campo. <br />
Por exemplo, você pode definir a forma como o campo é exibido usando propriedades CSS . <br />
Ver <strong><?php echo JText::_( 'Field parameters' ); ?></strong> para mais informações. <br />
<font color="red">Aviso! </font><br />
Utilize apenas apóstrofos ( ') neste campo. Não use aspas ( &quot;) ou as configurações não irão funcionar. <br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Ative (checado) se você deseja colocar o marcador no lado direito do campo. <br />
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Selecione o tipo do campo. Você pode escolher uma dessas opções: <br />
<ul>
  <li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
  - Um pequeno texto<br />
  <li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
  - Um campo com dois valores: verdadeiro ou falso<br />
  <li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
  - Uma lista de valores que você deseja definir<br />
  <li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
  - Um texto longo<br />
  <li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
  - Uma lista de possíveis valores a partir do qual a escolher<br />
  <li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
  - Uma lista de possíveis valores a partir dos quais apenas um pode ser escolhido<br />
  <li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
  - Solicitar uma data. A agenda está disponível para uma mais fácil utilização.<br />
  <li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
  - Solicitar um e-mail ao qual deseja enviar a mensagem.<br />
  <li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
  - Introduza uma lista de e-mails a partir do qual o remetente pode escolher o destino de sua mensagem<br />
  Veja <strong><?php echo JText::_( 'Field values' ); ?></strong> para obter instruções sobre como utilizar este campo<br />
  <li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
  - A lista de contatos adicionados em Joomla a partir da qual o remetente pode escolher o destino de sua mensagem<br />
  <li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
  - A lista de usuários adicionados em Joomla a partir da qual o remetente pode escolher o destino de sua mensagem<br />
  <li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
  - A lista de entradas na lista de SOBI2 a partir da qual o remetente pode escolher o destino de sua mensagem<br />
  <li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
  - Um campo que não será exibido no formulário de contato. Você pode usá-lo para colocar um texto em todas as mensagens.<br />
  Veja <strong><?php echo JText::_( 'Field values' ); ?></strong> para obter instruções sobre como utilizar este campo <br />
  <li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
  - Adicione um espaço entre os dois campos do formulário<br />
  <li><strong><?php echo JText::_( 'File' ); ?></strong></li>
  - Anexar um arquivo para a mensagem <br />
</ul>
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
No caso de pretender adicionar os campos <strong><?php echo JText::_( 'Combobox' ); ?></strong>, <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong>, <strong><?php echo JText::_( 'Radio - List' ); ?></strong>, <strong><?php echo JText::_( 'Email - List' ); ?> </strong>ou <?php echo JText::_( 'Hidden' ); ?>, aqui é onde você pode adicionar os valores a colocar na lista. <br />
Para <strong><?php echo JText::_( 'Combobox' ); ?></strong> insira todos os valores separados por &quot;;&quot;. Por exemplo de cores: vermelho, amarelo, verde, azul, preto. <br />
Para <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> insira todos os valores separados por &quot;;&quot;. Por exemplo de cores: vermelho, amarelo, verde, azul, preto. <br />
Para <strong><?php echo JText::_( 'Radio - List' ); ?></strong> insira todos os valores separados por &quot;;&quot;. Por exemplo de cores: vermelho, amarelo, verde, azul, preto. <br />
Para <strong><?php echo JText::_( 'Email - List' ); ?></strong> insira uma lista com os nomes e endereços de correio electrónico separados por &quot;;&quot;. Utilização &quot;:&quot; entre cada nome e endereço de email. Por exemplo ... Serviço: service@algis.ro; Departamento de Vendas: sales@algis.ro; Alexandru Dobrin: alex@algis.ro. <br />
Para <strong><?php echo JText::_( 'Hidden' ); ?></strong> insira o texto que você deseja adicionar em todas as mensagens. <br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Aqui você pode definir os parâmetros da tag HTML que será gerado para este campo. <br />
Por exemplo, você pode definir a forma como o campo é exibido usando CSS propriedades. <br />
Penso que um dos parâmetros mais utilizados é a largura do campo. A fim de modificá-lo você pode digitar o texto no campo: style = &quot;width: 250px;&quot;. Isto irá definir a largura de 250px. <br />
Entre todas as CSS valores que pretende utilizar, em apenas um estilo parâmetro separados por &quot;;&quot;. Por exemplo ... style = &quot;width: 250px; color: red;&quot;. <br />
Você pode encontrar aqui: http://www.w3schools.com/css/default.asp mais informações sobre a CSS.<br />
<font color="red">Aviso!</font><br />
Utilize apenas apóstrofos ( ') neste campo. Não use aspas ( &quot;) ou as configurações não irão funcionar. <br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Aqui você pode definir um valor padrão para o campo. <br />
Você pode usar este padrão valores para cada tipo do campo:
<ul>
  <li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
  - Texto padrão<br />
  <li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
  - 1 se quiser que esse campo controlados por omissão, 0 ou outra vazio<br />
  <li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
  - A posição do item que pretende ser selecionada por padrão a partir de 0 (0 para o primeiro, 1 para o segundo, 2 para o terceiro e assim por diante) <br />
  <li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
  - Texto padrão <br />
  <li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
  - Uma lista com 1 (para controlados) e 0 (unchecked) separados por, para cada item na lista (1, 0, 0, 1 para a primeira marcada, segundo desmarcada, Unchecked terceiro, quarto controlados) <br />
  <li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
  - O item que pretende ser selecionada por padrão <br />
  <li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
  - Uma data no formato aaaa-mm-dd (ano-mês-dia)<br />
  <li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
  - O e-mail padrão (não recomendado, pois pode ser encontrada por spammers) <br />
  <li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
  - A posição do e-mail que você deseja ser selecionada por padrão a partir de 0 (0 para o primeiro, 1 para o segundo, 2 para o terceiro e assim por diante)<br />
  <li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
  - O id do contato <br />
  <li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
  - O id do usuário<br />
  <li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
  - O id do SOBI2 entrada<br />
  <li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
  - Irrelevante <br />
  <li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
  - Irrelevante<br />
  <li><strong><?php echo JText::_( 'File' ); ?></strong></li>
  - Irrelevante<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Os campos serão ordenados no formulário de contato utilizando este campo.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
<font color="red">Aviso! </font><br />
Isto não pode ser modificado para os campos &quot;nome&quot;, &quot;email&quot; e &quot;assunto&quot;. <br />
Ative (checado), este se quiser que o remetente a ser obrigados a preencher este campo. <br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Ative (checado) ou desactivar o envio deste campo na mensagem. <br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
<font color="red">Aviso! </font><br />
Isto não pode ser modificado para os campos &quot;nome&quot;, &quot;email&quot; e &quot;assunto&quot;. <br />
Ative (checado), este se quiser utilizar este campo no formulário de contato.</div>
