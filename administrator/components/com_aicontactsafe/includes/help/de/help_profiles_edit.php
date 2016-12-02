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
<h4>Ein Profil bearbeiten</h4>
<p>Hier können Sie die Eigenschaften eines Profils bearbeiten.</p>
Benutzen Sie Toolbar um Änderungen zu speichern, zu übernehmen oder abzubrechen.<br/>
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Name des Profils.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Aktivieren (Häckchen) oder deaktivieren Sie das aiContactSafe CSS im Frontend.<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
Aktivieren (Häckchen) oder deaktivieren Sie die Sicherheitsabfrage (captcha), für das erfolgreiche Absenden der Informationen, im Frontend.<br />
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Setzen Sie die Breite (in Pixel) für das Captcha-Bild.<br />
<font color="red">Achtung !!!</font><br />
Testen Sie die Captcha-Ausgabe auf Lesbarkeit. Unsere Empfehlung ist min. 200 Pixel Breite.<br/>
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Setzen Sie die Höhe (in Pixel) für das Captcha-Bild.<br />
<font color="red">Achtung !!!</font><br />
Testen Sie die Captcha-Ausgabe auf Lesbarkeit. Unsere Empfehlung min. 55 Pixel Höhe.<br/>
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Setzen Sie die Hintergrundfarbe für das Captcha-Bild (Hexwert RGB, z.B. #FFFFFF).<br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Setzen Sie die Farben, welche für den Captcha-Code verwendet werden darf. Separieren Sie die Farben per Strichpunkt ";" und stellen Sie sicher, dass Sie auf dem Hintergrund sichtbar sind (z.B. #FF0000;#00FF00;#0000FF).<br/>
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Definieren Sie die E-Mail Adresse, welche die Informationen des Kontaktformular per E-Mail erhalten soll.<br/>
Wenn Sie es leer lassen, wird die Standard Joomla E-Mail Adresse verwendet.<br/>
<font color="red">Achtung !!!</font><br />
Ist ein <strong><?php echo JText::_( 'Field type' ); ?></strong> mit folgenden Werten definiert:
<ul>
	<li><?php echo JText::_( 'Email' ); ?></li>
	<li><?php echo JText::_( 'Email - List' ); ?></li>
	<li><?php echo JText::_( 'Joomla Contacts' ); ?></li>
	<li><?php echo JText::_( 'Joomla Users' ); ?></li>
	<li><?php echo JText::_( 'SOBI2 Entries' ); ?></li>
</ul>
Erhalten nur diese gewählten Einträge die Mitteilung!<br/>
Möchten Sie aber <strong>immer</strong> eine Kopie erhalten, müssen Sie <strong><?php echo JText::_( 'Always send to this email address' ); ?></strong> aktivieren!<br/>
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
Hiermit erzwingen Sie, dass Sie <strong>immer</strong> eine Kopie der Mitteilung erhalten. Egal ob irgendwelche selbstdefinierten Felder die Mitteilung erhalten sollen.<br/>
Normalerweise sollten Sie diese Einstellung aktivieren (Häckchen), damit Sie keine Mitteilung verpassen.<br/>
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Definieren Sie einen Text, der als Prefix in der Betreff Zeile hinzugefügt werden soll.<br/>
Dies ermöglicht Ihnen ein einfaches erkennen von Mitteilungen die durch das Kontaktformular generiert wurden.<br/>
Wenn Sie es leer lassen, wird der Name der Website verwendet, den Sie unter Site -> Konfiguration eingegeben haben.<br/>
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Aktivieren (Häckchen) oder deaktivieren Sie die Speicherung der Mitteilung in der Datenbank.<br/>
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Definieren Sie das Datumsformat, welches für Datumsfelder verwendet werden soll.<br/>
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
Wenn Sie ein Datumsfeld im Kontaktformular verwenden, können Sie die Anzahl Jahre die in der Vergangenheit erscheinen sollen definieren. Dieses Feld kontrolliert das minimum Jahr, ausgehend vom aktuellen Jahr.<br/>
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
Wenn Sie ein Datumsfeld im Kontaktformular verwenden, können Sie die Anzahl Jahre die in der Zukunft erscheinen sollen definieren. Dieses Feld kontrolliert das maximum Jahr, ausgehend vom aktuellen Jahr.<br/>
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
Das Zeichen, welches erforderliche Felder kennzeichnet, damit das Kontaktformular überhaupt übermittelt wird.<br/>
Sie können HTML-Tags verwenden. Benutzen Sie aber keine Anführungszeichen (") darin.<br/>
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Hier können Sie zusätzliche Informationen erfassen, die ebenfalls auf dem Kontaktformular erscheinen sollen.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
Hier definieren Sie wo diese <?php echo JText::_( 'Contact information' ); ?> erscheinen sollen. Sie haben folgende Möglichkeiten:
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?></li></em></strong>
die Kontaktinformationen werden nicht angezeigt (ignoriert).<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
die Kontaktinformationen erscheinen am Anfang des Formulars.<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
die Kontaktinformationen erscheinen auf der rechten Seite, neben dem Kontaktformular.<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
die Kontaktinformationen erscheinen am Ende des Formulars.<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
die Kontaktinformationen erscheinen auf der linken Seite, neben dem Kontaktformular.<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Erfassen Sie die <?php echo JText::_( 'Meta description' ); ?>, welche für dieses Profil verwendet werden soll.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Erfassen Sie die <?php echo JText::_( 'Meta keywords' ); ?>, welche für dieses Profil verwendet werden soll.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
Die Mitteilung, die im Frontend erscheinen soll, wenn sie erfolgreich übermittelt wurde.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Definieren Sie dieses Profil als Standard Profil, wenn kein Profil definiert wurde.<br/>
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Aktivieren (Häckchen) oder deaktivieren Sie dieses Profil.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Definieren Sie die Felder, welche in diesem Profil angezeigt werden sollen.<br/>

<br />
</div>
