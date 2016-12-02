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
<h4>Agregar / Editar un campo</h4>
<p>Aquí es donde usted puede agregar / editar un campo.</p>
Use la barra de herramientas de arriba a la derecha para Guardar / Aplicar / Cancelar la información mostrada en el formulario.<br/>
<br />
Aquí están las instrucciones para cada uno de los campos en la fórmula:<br />
<br />
<strong><?php echo JText::_( 'Field name' ); ?></strong><br />
Nombre del nuevo campo.<br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
La etiqueta del campo. <br />
Usted puede utilizar tags HTML aquí, pero no use comillas (&quot;).<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Aquí usted puede ajustar los parámetros de la etiqueta HTML que será gereada por la etiqueta del campo.<br />
Por ejemplo usted puede ajustar la forma en que el campo es mostrado utilizando propiedades CSS.<br />
Vea <strong><?php echo JText::_( 'Field parameters' ); ?></strong> para más información..<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Aquí usted puede especificar una etiqueta diferente de campo para usar en el mensaje.<br />
Usted puede utilizar etiquetas HTML aquí, pero no use comillas (&quot;)<br />
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Aquí usted puede ajustar los parámetros de la etiqueta HTML que será gereada por la etiqueta del campo.<br />
Por ejemplo usted puede ajustar la forma en que el campo es mostrado utilizando propiedades CSS.<br />
Vea <strong><?php echo JText::_( 'Field parameters' ); ?></strong> para más información..<br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Active ( marcado ) esto si usted quiere colocar la etiqueta del lado derecho del campo.<br />
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Seleccione el tipo de campo. Puede escoger entre las siguientes opciones:<br />
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- un texto corto<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- un campo con dos valores : verdadero o falso<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- una lista de valores que usted quiera definir<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- un texto más largo<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- una lista de posibles valores para escoger<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- una lista de valores de los cuales sólo se puede escoger uno<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- requerir una fecha.  Un calendario está disponible para utilizarlo más fácilmente<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- requerir un email al cual enviar el mensaje<br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- ingresar una lista de emails desde la cual el remitente puede escoger el destinatario de su mensaje<br />
Vea <strong><?php echo JText::_( 'Field values' ); ?></strong> para instrucciones de cómo utilizar este campo<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- la lista de contactos agregada en Joomla! desde la cual el remitente puede escoger el destinatario de su mensaje<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- la lista de usuarios agregada en Joomla! desde la cual el remitente puede escoger el destinatario de su mensaje<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- la lista de listas de entradas en SOBI2 desde la cual el remitente puede escoger para destinatario de su mensaje.<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- un campo que no se puede mostrar en el formulario de contacto.  Usted puede usarlo para colocar un texto en todos los mensajes.<br />
Ver <strong><?php echo JText::_( 'Field values' ); ?></strong> para instrucciones de cómo utilizar este campo<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- agregar un espacio entre dos campos del formulario<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- Adjuntar un archivo al mensaje<br />
</ul>
<br />
<strong><?php echo JText::_( 'Send message' ); ?></strong><br />
Esto sólo se usa con los tipos de campos que contienen un email  (<?php echo JText::_( 'Email' ); ?>, <?php echo JText::_( 'Email - List' ); ?>, <?php echo JText::_( 'Joomla Contacts' ); ?>, <?php echo JText::_( 'Joomla Users' ); ?>, <?php echo JText::_( 'SOBI2 Entries' ); ?> ).<br />
Si se activa  ( marcado ) el mensjae se envía a la dirección de correo a la que está conectada el tipo de campo. Se ignora para el resto de los tipos de campo.<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
<br />
En caso de que usted quiera agregar un campo<strong> <?php echo JText::_( 'Combobox' ); ?></strong>, un campo <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong>, un campo <strong><?php echo JText::_( 'Radio - List' ); ?></strong>, un campo <strong><?php echo JText::_( 'Email - List' ); ?></strong>  o un campo <?php echo JText::_( 'Hidden' ); ?>, aquí es donde usted puede agregar los valores para colocar en la lista.<br />
Para un campo <strong><?php echo JText::_( 'Combobox' ); ?></strong> ingrese todos los valores separados por &quot;<strong>;</strong>&quot;. Por ejemplo para colores: rojo;amarillo;verde;azul;negro.<br />
Para un campo<strong> <?php echo JText::_( 'Checkbox - List' ); ?></strong> ingrese todos los valores separados por &quot;<strong>;</strong>&quot;. Por ejemplo para colores: rojo;amarillo;verde;azul;negro.<br />
Para un campo <strong><?php echo JText::_( 'Radio - List' ); ?></strong> ingrese todos los valores separados por &quot;<strong>;</strong>&quot;. Por ejemplo para colores: rojo;amarillo;verde;azul;negro.<br />
Para un campo <strong><?php echo JText::_( 'Email - List' ); ?></strong>  ingrese una lista con nombres y direcciones de email, separadas por &quot;<strong>;</strong>&quot;. Utilice el símbolo "<strong>:</strong>" entre el nombre y el email (opcional). Por ejemplo : Departamento de servicio:service@algis.ro;Departamento de ventas:sales@algis.ro;Alexandru Dobrin:alex@algis.ro.<br />
Para un campo<strong> <?php echo JText::_( 'Hidden' ); ?></strong>  ingrese el texto que usted quiera agregar en todos los mensajes.<br />
<br />
<strong><?php echo JText::_( 'Field limit' ); ?></strong><br />
Esto le permitirá ajustar el límite de caracteres que el usuario puede introducir en un campo.<br />
Se ignora para los tipos de campo en el que este límite es irrelevante.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Aquí usted puede ajustar los parámetro de la etiqueta HTML que será generada por este campo.<br />
Por ejemplo, usted puede ver la manera en que el campo es mostrado usando propiedades CSS.<br />
Creo que uno de los parámetro más utilizados es el ancho del campo. Para modificarlo usted puede escribir este texto en el campo : style='width:250px;'. Esto ajustará el ancho a 250px.<br />
Ingrese todos los valores CSS que quiera usar en un sólo parámetro de estilo separado por &quot;<strong>;</strong>&quot;. Por ejemplo: style='width:250px;color:red;'.<br />
Usted puede encontrar más información sobre CSS aquí : <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a>.<br />
<br />
<strong><?php echo JText::_( 'Auto fill' ); ?></strong><br />
Aquí usted puede seleccionar rellenar el valor del campo con un valor de Joomla  ( <?php echo JText::_( 'Joomla user name' ); ?> o <?php echo JText::_( 'Joomla user email' ); ?> ) si el usuario está conectado.<br />
Seleccione <?php echo JText::_( '- none -' ); ?> para deshabilitar esta función..<br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Aquí usted puede definir un valor predeterminado para el campo.<br />
Puede utilizar los siguientes valores predeterminados para cada tipo de campo:
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- texto predeterminado<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- <strong>1</strong> si usted quiere este campo por defecto, <strong>0</strong> si lo desea vacío.<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- la posición del elemento que usted quiere que esté seleccionado por defecto, empezando desde 0 ( 0 para el primero, 1 para el segundo, 2 para el tercero, y así sucesivamente )<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- texto predeterminado<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- una lista con <strong>1</strong> ( para marcado ) y <strong>0</strong> ( desmarcado ) separados por "<strong>;</strong>" para cada elemento en la lista ( 1;0;0;1 para primero marcado, segundo desmarcado, tercero desmarcado, cuarto marcado )<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- el elemento que desee que aparezca seleccionado por defecto<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- una fecha en el formato yyyy-mm-dd ( año-mes-día )<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- el email predeterminado ( no recomendado, ya que puede ser encontrado por spammers ) <br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- la posición del email que desee que aparezca seleccionado por defecto, empezando desde 0  the position of the email you want to be selected by default starting from 0 ( 0 para el primero, 1 para el segundo, 2 para el tercero, y así sucesivamente )<br /><br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- el ID del contacto<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- el ID del usuario<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- el ID de la entrada de SOBI2<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- irrelevante<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- irrelevante<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- irrelevante<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Los campos serán ordenados en el formulario de contacto usando este campo.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
Active ( marcado ) esto si quiere que el remitente se vea forzado a completar este campo.<br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Activar ( marcado ) o desactivar si quiere enviar este campo en el mensaje.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Active ( marcado ) esto si usted quiere utilizar este campo en el formulario de contacto.<br />
<br />
</div>

