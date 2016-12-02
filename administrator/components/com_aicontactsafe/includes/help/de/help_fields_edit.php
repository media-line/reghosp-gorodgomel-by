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
<h4>Ein Feld bearbeiten</h4>
<p>Hier können Sie die Eigenschaften eines Feldes bearbeiten.</p>
Benutzen Sie Toolbar um Änderungen zu speichern, zu übernehmen oder abzubrechen.<br/>
<br/>
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Name des Feldes.<br />
<font color="red">Achtung !!!</font><br />
Die Felder mit dem Namen "name", "email", "subject" und "send_to_sender" können nicht verändert werden.<br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
Die Bezeichnung für dieses Feld.<br />
Sie können HTML-Tags verwenden. Benutzen Sie keine Anführungszeichen (") darin.<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Hier können Sie zusätzliche Parameter für das HTML-Tag, welches um die Bezeichnung gesetzt wird, definieren. Z.B. können Sie zusätzliche CSS-Eigenschaften definieren.<br/>
Für weitere Informationen, lesen Sie bitte den Abschnitt <strong><?php echo JText::_( 'Field parameters' ); ?></strong>.<br />
<font color="red">Achtung !!!</font><br />
Benutzen Sie nur Apostrophe (') und keine Anführungszeichen (") in diesem Feld. Sonst werden die Parameter nicht funktionieren.<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Hier können Sie eine andere Feldbezeichnung in der E-Mail für dieses Feld definieren.<br/>
Sie können HTML-Tags verwenden. Benutzen Sie keine Anführungszeichen (") darin.<br/>
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Hier können Sie zusätzliche Parameter in der E-Mail Mitteilung für das HTML-Tag, welches um die Bezeichnung gesetzt wird, definieren. Z.B. können Sie zusätzliche CSS-Eigenschaften definieren.<br/>
Here you can set the parameters of the HTML tag that will be generated for the label of the field in the message.<br />
Für weitere Informationen, lesen Sie bitte den Abschnitt <strong><?php echo JText::_( 'Field parameters' ); ?></strong>.<br />
<font color="red">Achtung !!!</font><br />
Benutzen Sie nur Apostrophe (') und keine Anführungszeichen (") in diesem Feld. Sonst werden die Parameter nicht funktionieren.<br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Aktivieren (Häckchen) Sie diese Eigenschaft, wenn die Feldbezeichnung rechts vom Eingabefeld erscheinen soll. Standard ist links.<br/>
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Wählen Sie den Feldtyp für das Eingabefeld. Folgende stehen zur Verfügung:<br/>
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong>
<br />kurzer Text (1-zeilig).</li>
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong>
<br />ein Feld mit 2 Werten : wahr (true) oder falsch (false).</li>
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong>
<br />eine Liste von Werten in einer Select-Box. Nur 1 Eintrag kann gewählt werden.</li>
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong>
<br />langer Text (mehrzeilig).</li>
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong>
<br />eine Liste von Werten als Checkboxen. Eine mehrfache Auswahl ist möglich.</li>
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong>
<br />eine Liste von möglichen Werten, aus welcher nur 1 Auswahl gewählt werden kann.</li>
<li><strong><?php echo JText::_( 'Date' ); ?></strong>
<br />Datumsfeld. Ein Kalender zur vereinfachten Auswahl steht zur Verfügung.</li>
<li><strong><?php echo JText::_( 'Email' ); ?></strong>
<br />Verlangt eine gültige E-Mail Adresse, die diese Mitteilung per E-Mail erhält.</li>
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong>
<br/>eine selbstdefinierte Liste von Namen und E-Mail Adressen, von welcher der Benutzer einen Empfänger wählen kann, der diese Mitteilung per E-Mail erhält.</li>
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong>
<br/>eine Liste aller Joomla Kontakte aus Joomla, von welcher der Benutzer einen Empfänger wählen kann, der diese Mitteilung per E-Mail erhält.</li>
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong>
<br/>eine Liste aller Joomla Benutzer (Front- und Back-End), von welcher der Benutzer einen Empfänger wählen kann, der diese Mitteilung per E-Mail erhält.</li>
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong>
<br/>eine Liste von SOBI2 Einträgen, von welcher der Benutzer einen Empfänger wählen kann, der diese Mitteilung per E-Mail erhält.</li>
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong>
<br />ein verstecktes Feld im Kontakt Formular. Hier können Sie einen Text hinterlegen, der in allen Mitteilungen erscheint.<br />
See <strong><?php echo JText::_( 'Field values' ); ?></strong> for instructions on how to use this field</li>
<li><strong><?php echo JText::_( 'Separator' ); ?></strong>
<br/>fügen Sie einen Abstand zwischen zwei Felder ein</li>
<li><strong><?php echo JText::_( 'File' ); ?></strong>
<br />eine Datei der Mitteilung hinzuzufügen.</li>
</ul>
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
Für folgende Feldtypen können Sie einen (oder mehrere) Werte definieren:
<ul>
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
</ul>
Für ein <strong><?php echo JText::_( 'Combobox' ); ?></strong> Feld, erfassen Sie alle Werte Strichpunkt ";" separiert. Z.B. für Grössen : XXL;XL;L;S;XS .<br/>
Für ein <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> Feld, erfassen Sie alle Werte Strichpunkt ";" separiert. Z.B. für Farben : Rot;Gelb;Grün;Blau .<br/>
Für ein <strong><?php echo JText::_( 'Radio - List' ); ?></strong> Feld, erfassen Sie alle Werte Strichpunkt ";" separiert. Z.B. für Wertung : Hervorragend;Gut;Schlecht .<br/>
Für ein <strong><?php echo JText::_( 'Email - List' ); ?></strong> Feld, erfassen Sie eine Liste von Namen und E-Mail Adressen durch einen Strichpunkt ";" separiert. Benutzen Sie einen Doppelpunkt ":" zwischen Name und der E-Mail Adresse. Z.B. : Support:service@algis.ro;Verkauf:sales@algis.ro;Alexandru Dobrin:alex@algis.ro.<br />
Für ein <strong><?php echo JText::_( 'Hidden' ); ?></strong> Feld, erfassen Sie den Text, den Sie allen Mitteilungen hinzufügen möchten.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Hier können Sie die Parameter für das Eingabefeld definieren.<br/>
Als Beispiel können Sie CSS-Eigenschaften für die Darstellung eines Feldes definieren<br/>
Eines der häufigsten verwendeten Parameter ist die Breite eines Feldes. Um diese Eigenschaft zu verändern, können Sie folgenden Wert in diesem Feld verwenden : style='width:250px;' . Dies setzt die Breite auf 250px.<br/>  
Verwenden Sie alle CSS Werte die Sie ändern möchten in einem Style-Parameter, separiert mit Strichpunkt ";". Z.B. : style='width:250px;color:red;' . <br/>
Für weitere Informationen über CSS, lesen Sie bitte folgenden Artikel <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a>.<br/>
<font color="red">Achtung !!!</font><br />
Benutzen Sie nur Apostrophe (') und keine Anführungszeichen (") in diesem Feld. Sonst werden die Parameter nicht funktionieren.<br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Hier können Sie einen Standard Wert definieren. Dieser ist im Formular für dieses Feld dann vorselektiert.<br />
Sie können für folgende Felder einen Standard Wert definieren:

<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong><br />
Standard Text</li>
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong><br />
1 (Zahl 1) wenn diese Checkbox aktiviert sein soll, 0 (Zahl 0) wenn deaktiviert.</li>
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong><br />
die Position in der Liste, welche selektiert sein soll. Beginnend bei 0 (0 für den ersten Eintrag, 1 für den zweiten, 2 für den dritten, und so weiter).</li>
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
Standard Text<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong><br/>
eine Liste mit 1 (aktiviert) und 0 (nicht aktiviert) separiert mit Strichpunkten ";" für jeden Eintrag. Z.B 1;0;0;1 (1. Wert aktiviert, 2. Wert nicht aktiviert, 3. Wert nicht aktiviert, 4. Wert aktiviert).</li>
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
die Radiobox die vorselektiert sein soll (der Feldwert aus der Liste).<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong><br />
ein Datum im Format yyyy-mm-dd (Jahr-Monat-Tag)</li>
<li><strong><?php echo JText::_( 'Email' ); ?></strong><br/>
eine Standard E-Mail Adresse (nicht empfohlen, da diese durch Spammer gefunden wird)</li>
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
die Position aus der Liste, beginnend von 0 (0 für 1. Eintrag, 1 für 2. Eintrag, etc.).<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong><br/>
die ID vom Kontakt.</li>
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong><br/>
die ID vom Benutzer</li>
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong><br />
die ID vom SOBI2 Eintrag</li>
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- irrelevant<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- irrelevant<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- irrelevant<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Mit diesem Feld können Sie die Reihenfolge der Felder im Kontaktformular definieren.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
Aktiviert (Häckchen) muss dieses Feld im Kontaktformular vom Benutzer ausgefüllt werden.
<font color="red">Achtung !!!</font><br />
Die Felder "name", "email" und "subject" sind immer erforderlich und können nicht inaktiv gesetzt werden.<br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Aktivieren (Häckchen) Sie diese Option, wenn dieses Feld in der E-Mail angezeigt werden soll.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Aktiviert (Häckchen) wird dieses Feld im Kontaktformular verwendet.<br/>
<font color="red">Achtung !!!</font><br />
Diese Option kann für die Felder "name", "email" und "subject" nicht deaktiviert werden.<br />
<br />
</div>
