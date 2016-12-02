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
<p>Hier finden Sie eine Erklärung für jedes Feld im <?php echo JText::_( 'Control Panel' ); ?> :</p>
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Aktivieren (Häckchen) oder deaktivieren Sie das Standard CSS von aiContactSafe im Backend.<br/>
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Wenn aktiviert, erscheint die Hilfe im Backend in der rechten Spalte.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong><br />
Konfigurieren Sie die Darstellung von Datumsfelder bei der Ausgabe in dieser Komponente. Für weitere Informationen, lesen Sie bitte <a href="http://www.php.net/manual/en/function.strftime.php" target="_blank">http://www.php.net/manual/en/function.strftime.php</a>.<br />
<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong><br />
Aktivieren (Häckchen) oder deaktivieren Sie die SPAM Kontrolle. Ist sie aktiviert, werden Mitteilungen auf spezifische Wörter (siehe <b><?php echo JText::_( 'Block messages with' ); ?></b>) überprüft und wenn zutreffend <b>nicht</b> per E-Mail gesendet.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Erfassen Sie die Wörter, die eine Mitteilung als SPAM identifizieren. Separieren Sie die Wörter mit Strichpunkt ";".<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
Wenn aktiviert (Häckchen), werden Mitteilungen die als SPAM erkannt wurden ebenfalls in der Datenbank gespeichert (SPAM Mitteilungen werden nicht per E-Mail zugestellt).<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Aktivieren (Häckchen) oder deaktivieren Sie die IP Sperre. Wenn Sie diese aktivieren, können <b>keine</b> Besucher mit den zutreffenden Einträgen (siehe <b><?php echo JText::_( 'IPs to ban' ); ?></b>) Ihre Kontaktformulare aufrufen.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />
Definieren Sie die zu sperrenden IP's. Separieren Sie diese mit einem Strichpunkt ";". Sie können auch den Platzhalter Stern "*" verwenden, um ganze Bereiche zu sperren. Z.B. 123.123.*.* wird alle IP's sperren die mit 123.123 beginnen.<br/>
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Definieren Sie die Seite, auf welcher gesperrte IP's umgeleitet werden. Standard ist die "Startseite".<br />
<br />
<strong><?php echo JText::_( 'Upload attachments folder' ); ?></strong><br />
Definieren Sie den Ordner, wo die Anhänge (Dateien) gespeichert werden.<br/>
<br />
<strong><?php echo JText::_( 'Maximum attachments size (in bytes)' ); ?></strong><br />
Definieren Sie die maximal erlaubte Dateigrösse für Anhänge in Bytes (1024 Bytes = 1KByte; 1048576 Bytes = 1 MByte; 5242880 Bytes = 5 MByte).<br/>
Beachten Sie, dass dieser Wert die "upload_max_filesize" in der PHP.INI nicht überschreiten darf. Für weitere Informationen, lesen Sie bitte 
<a href="http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize" target="_blank">
http://www.php.net/manual/en/ini.core.php#ini.upload-max-filesize</a>.<br />
<br />
<strong><?php echo JText::_( 'Allowed attachments types' ); ?></strong><br />
Die erlaubten Datei-Erweiterungen für die Anhänge. Separieren Sie die Erweiterungen per Komma (,). Z.B "jpg,jpeg,gif,png".<br/>
<br />
<strong><?php echo JText::_( 'Attach to email' ); ?></strong><br />
Wenn aktiviert (Häckchen), werden die Anhänge im E-Mail mitgesendet oder als Link wo sie auf dem Server gespeichert sind.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
Wenn Sie Artio JoomSEF (SEO) verwenden, können Sie das Artio plugin für aiContactSafe aktivieren..<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
Wenn Sie Joom!Fish Mehrsprachigkeit verwenden, können Sie die aiContactSafe Elemente und Mitteilungen ebenfalls mit Joom!Fish übersetzen.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
Diese Aktion wird alle Tabellen (und deren Inhalt), von der aiContactSafe Komponente, von Ihrer Datenbank (DB) entfernen. Dies erlaubt Ihnen die Komponente vollständig zu entfernen.<br/>
Bei einem Update, müssen Sie normalerweise die Komponente nur <strong>Deinstallieren</strong> (was die aiContactSafe-Tabellen in Ihrer Joomla-Datenbank nicht entfernt) und anschliessend die neue Version einspielen.<br/>
So bleiben die bestehenden aiContactSafe-Inhalte auch für die neue Version erhalten.<br/>
<font color="red">Achtung !!!<br />
Löschen Sie die Tabellen von aiContactSafe, können diese anschliessend nicht mehr wiederhergestellt werden!</font><br />
<br />
</div>
