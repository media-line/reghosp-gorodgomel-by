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
<h4>Agregar / Editar un perfil</h4>
<p>Aquí es donde usted puede agregar / editar un perfil</p>
Utilice la barra de herramientas  arriba a la derecha para Guardar / Aplicar / Cancelar la información que va dentro del formulario.<br/>
<br/>
Aquí están las instrucciones para cada campo en la fórmula :<br />
<br />
<strong><?php echo JText::_( 'Profile name' ); ?></strong><br />
Nombre del perfil.<br />
<br />
<strong><?php echo JText::_( 'Field used as name' ); ?></strong><br />
Seleccione el campo para usar como nombre del remitente del email. Si selecciona <?php echo JText::_( 'Default' ); ?> entonces será usado el valor por defecto definido en el Panel de Control de aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as email' ); ?></strong><br />
Seleccione el campo para usar como la dirección de correo del remitente del email. Si selecciona <?php echo JText::_( 'Default' ); ?> entonces será usado el valor por defecto definido en el Panel de Control de aiContactSafe.<br />
Esto sólo puede ser un campo tipo <?php echo JText::_( 'Email' ); ?>o tipo <?php echo JText::_( 'Email - List' ); ?>.<br />
<br />
<strong><?php echo JText::_( 'Field used as subject' ); ?></strong><br />
Seleccione el campo para usar como el título del email. Si selecciona <?php echo JText::_( 'Default' ); ?> entonces será usado el valor por defecto definido en el Panel de Control de aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as send to sender' ); ?></strong><br />
Seleccione el campo que determina si el mensaje es enviado al remitente o no. Si selecciona  <?php echo JText::_( 'Default' ); ?> el mensaje no se envía al remitente.<br />
<br />
<strong><?php echo JText::_( 'Use AJAX to submit the form' ); ?></strong><br />
Activar ( marcado ) o desactivar el uso de AJAX para enviar el formulario. Esto será automáticamente activado si usted usa el formulario en un plugin o  módulo.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Activar ( marcado ) o desactivar las configuraciones predeterminadas de CSS de aiContactSafe en el frontend.<br />
<br />
<strong><?php echo JText::_( 'CSS code of the profile' ); ?></strong><br />
Aquí usted puede editar el código CSS usado en este perfil. Si lo deja vacío no se utilizará ningún código CSS.<br />
<br />
<strong><?php echo JText::_( 'Contact form width' ); ?></strong><br />
Ajuste el ancho del formulario de contacto. Ajuste a 0 para dejar que el navegador determine el ancho.<br />
<br />
<strong><?php echo JText::_( 'Contact information width' ); ?></strong><br />
Ajuste el ancho de la información de contacto. Ajuste a 0 para dejar que el navegador determine el ancho.<br />
Si utliliza el formulario de contacto arriba de la información de contacto ( o viceversa ) el ancho máximo de estos será utilizado.<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
Usted tiene las siguientes opciones:<br />
<ul>
<strong><em><li><?php echo JText::_( 'Only for unregistered users' ); ?></li></em></strong>
- mostrará CAPTCHA sólo si el visitante no está autentificado<br />
<strong><em><li><?php echo JText::_( 'Always' ); ?></li></em></strong>
- siempre mostrará CAPTCHA<br />
<strong><em><li><?php echo JText::_( 'Never' ); ?></li></em></strong>
- nunca mostrará CAPTCHA <br />
</ul>
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Ajustar el ancho de la imagen con el código captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Ajustar la altura de la imagen con el código captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Ajustar color de fondo de la imagen con el código captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha background transparent' ); ?></strong><br />
Hacer transparente el fondo del código CAPTCHA.<br />
Usted tiene que seleccionar aún un color de fondo que se ajuste, ya que aparecerá alrededor del código CAPTCHA como un contorno.<br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Ajustar los colores que la imagen con el código CAPTCHA puede utilizar. Ingrese los colores separados por &quot;<strong>;</strong>&quot; y esté seguro de que son visibles sobre el color de fondo.<br />
<br />
<strong><?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?></strong><br />
Activar la generación aleatoria del códiigo CAPTCHA. Esto detendrá la selección del CAPTCHA desde los archivos de palabras, y generará el código al azar.<br />
<br />
<strong><?php echo JText::_( 'Mininum word length' ); ?></strong><br />
Ajuste la longitud mínima para la palabra del código CAPTCHA aleatorio. Esto se utiliza sólo cuando se activa  <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?>.<br />
<br />
<strong><?php echo JText::_( 'Maximum word length' ); ?></strong>
Ajuste la longitud máxima para la palabra del código CAPTCHA aleatorio. Esto se utiliza sólo cuando se activa  <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?>.<br />
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Especifique la dirección de email a la cual el formulario de contacto se envía.<br />
Si usted deja esto en blanco, se utilizará el email predeterminado de Joomla!.<br />
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
Fuerce al mensaje ser enviado al email especificado arriba, incluso si uno de los campos personalizados usados por este perfil es un tipo email y el mensaje será enviado a ese.<br />
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Especifique el texto para agregar en el frente del título para poder identificar mejor el email.<br />
Si deja esto en blanco, se utilizará el nombre del sitio especificado en el panel de control de Joomla!.
<br />
<br />
<strong><?php echo JText::_( 'Email mode' ); ?></strong><br />
Selecciona la manera en quye va a ser enviado el mensaje. En formato HTML o en texto sin formato.<br />
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Activar ( marcado ) o desactivar el registro del mensaje en la base de datos.<br />
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Formato de fecha de los campos personalizados del tipo fecha.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
Cuando usted utiliza campos personalizados de tipo fecha, los años son presentados en una lista. Esto controla el año mínimo, comenzando por el año actual.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
Cuando usted utiliza un campo personalizado de tipo fecha, el año se presenta en una lista. Este campo controla el año máximo, empezanod por el año actual.<br />
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
El caracter que marcará los campos requeridos.<br />
Usted puede utilizar etiquetas HTML aquí, pero no use comillas (&quot;).<br />
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Aquí usted puede agregar una dirección o cualquier otra información que sea necesario mostrar en el formulario de contacto.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
Este campo controla la manera en que se muestra la información de contacto ( especificada en el campo anterior ) en el frontend. Usted tiene las siguientes opciones:<br />
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?> </li></em></strong>
- la información de contacto no será mostrada<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
- la información de contacto se mostrará arriba del formulario<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
- la información de contacto se mostrará a la derecha del formulario<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
- la información de contacto se mostrará en el fondo del formulario<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
- la información de contacto se mostrará a la izquierda del formulario<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Coloque una etiqueta de meta descripción en el formulario de contacto.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Coloque una etiqueta de meta palabras claves en el formulario de contacto.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
El mensaje para mostrar cuando se envía el formulario de forma existosa.<br />
<br />
<strong><?php echo JText::_( 'Redirect on succes URL' ); ?></strong><br />
Defina aquí el URL donde se redirecciona la página cuando el mensaje es enviado con éxito.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Vea este perfil como el predeterminado cuando ningún otro perfil es especificado.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Activar ( marcado ) desactivar este perfil.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Seleccionar los campos que son usado con este perfil.<br />
Todos los campos usados como los parámetros de email ( nombre, email, título, enviar a remitente ) tienen que estar seleccionados aquí.<br />
<br />
</div>
