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
<p>Aquí están las instrucciones para cada uno de los campos en el <?php echo JText::_( 'Control Panel' ); ?> : </p>
<br /> 
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Activar ( marcado ) o desactivar las configuraciones CSS predeterimadas de aiContactSafe en el backend.<br />
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Active esto si usted quiere mostrar las instrucciones de ayuda en el backend.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong>
Ingrese el formato de fecha que será usado por este componente para mostrar los campos de fecha. Lea lo siguiente para más información: <a href="http://docs.php.net/manual/es/function.strftime.php" target="_blank">http://docs.php.net/manual/es/function.strftime.php</a>.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Cols' ); ?></strong><br />
Ajuste el número de columnas que tendrá el un área de edición en el formulario de contacto.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Rows' ); ?></strong><br />
Ajuste el número de filas que tendrá el un área de edición en el formulario de contacto.<br />
<br />
<strong><?php echo JText::_( 'Default name' ); ?></strong><br />
Ajuste el nombre predeterminado que aiContactSafe usará en caso de que el campo "<?php echo JText::_( 'Field used as name' ); ?>" se deja en el valor <?php echo JText::_( 'Default' ); ?>.<br />
Deje vacío para usar el nombre del sitio definido en Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default email' ); ?></strong><br />
Ajuste la dirección predeterminada de correo que aiContactSafe usará si el campo "<?php echo JText::_( 'Field used as email' ); ?>" se deja en el valor <?php echo JText::_( 'Default' ); ?>.<br />
Deje vacío para usar la dirección de correo del sitio definida en Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default subject' ); ?></strong><br />
Ajuste el título predeterminado de correo que aiContactSafe usará si el campo  "<?php echo JText::_( 'Field used as subject' ); ?>" se deja en el valor <?php echo JText::_( 'Default' ); ?>.<br />
Si se deja vacío no se incluirá ningún título al prefijo del título definido en el perfil.<br />
<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong>
Activar ( marcado ) o desactivar el control de spam. Esto activará la revisión de los mensajes para palabras determinadas, y en caso de que se encuentren en el mensaje, este no se enviará.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Especificar las palabras para revisar con el objetivo de marcar un mensaje como spam. Separar las palabras con &quot;<strong>;</strong>&quot;.<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
Si ud activa ( marcado ) esto, los mensajes marcados como spam no se enviarán, pero se registrarán en la base de datos.<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Activar ( marcado ) o desactivar los baneos de IP. Si usted activa esto, los visitantes desde el IP especificado no serán capaces de accesar el formulario de contacto.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />
Especificar los IPs para baneo. Separe las direcciones con &quot;<strong>;</strong>&quot;. Usted puede usar &quot;*&quot; para especificar la calse entera. Por ejemplo  123.123.*.* baneará todos los IPs que comiencen con 123.123.<br />
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Especificar la página donde se redireccionan los IPs bloqueados. La página de Inicio se utiliza por defecto.<br />
<br />
<strong><?php echo JText::_( 'Ban IPs sending messages with blocked words' ); ?></strong><br />
Activar ( marcado ) o desactivar el baneo de IPs que envían mensajes con palabras bloqueadas.<br />
Si esto está activado cuando sea que reviba el número de mensajes con palabras bloqueadas, especificadas en el campo "<?php echo JText::_( 'Block messages with' ); ?>", el IP que envió el mensaje automáticamente queda baneado.<br />
<br />
<strong><?php echo JText::_( 'Maximum blocked messages before IP ban' ); ?></strong><br />
Ajuste el número de mensajes con palabras bloqueadas que activará el baneo de IP.<br />
<br />
<strong><?php echo JText::_( 'Minutes to count the blocked messages' ); ?></strong><br />
Ajuste el período de tiempo para contar los mensajes recibidos con palabras bloqueadas con el fin de banear el IP.<br />
<br />
<strong><?php echo JText::_( 'Email to notify IP ban' ); ?></strong><br />
Ajuste la dirección de correo donde se enviará una notificación cuanto un IP es automáticamente bloqueado.<br />
<br />
<strong><?php echo JText::_( 'Upload attachments folder' ); ?></strong><br />
Especificar la carpeta donde se subirán los archivos adjuntos en el mensaje.<br />
<br />
<strong><?php echo JText::_( 'Maximum attachments size (in bytes)' ); ?></strong><br />
Especificar el tamaño máximo de los archivos adjuntos, en bytes. (1024 Bytes = 1KByte; 1048576 Bytes = 1 MByte; 5242880 Bytes = 5 MByte).<br />
El tamaño debe ser igual o menor al valor en el parámetro "upload_max_filesize" en su archivo PHP.INI.<br />
Para más información vea esta pagina : <a href="http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize" target="_blank">http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize</a>.<br />
<br />
<strong><?php echo JText::_( 'Allowed attachments types' ); ?></strong><br />
Tipos de archivo que se pueden adjuntar. Use la coma (<strong>,</strong>) para separarlos.<br />
<br />
<strong><?php echo JText::_( 'Attach to email' ); ?></strong><br />
El archivo adjunto puede ser enviado en el mensaje pero sólamente como un vínculo al archivo dentro del servidor, o bien puede ser directamente adjunto al mensaje<br />
Activar ( marcado ) este campo para adjuntar los archivos al menaje.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
En caso de que usted use el componente Artio para SEO, usted puede acticvar/desactivar el plugin para Artio de aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
En caso de que usted use el componente Joom!Fish para soporte de multilenguaje, usted puede activar/desactivar los elementos de contenido de aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
Este botón eliminará todas las tablas generadas por este componente en la base de datos.  Es aquí donde usted desinstala por completo el componente.<br />  <font color="red">¡¡</font>
<font color="red">Advertencia!!<br />
  Esto eliminará todas las tablas de aiContactSafe y usted no podrá recuperarlas luego de eso.</font><br />
<br />
</div>


