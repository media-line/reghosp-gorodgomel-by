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
<h4>Mitteilung anzeigen</h4>
<p>Hier können Sie die gespeicherte Mitteilung einsehen.</p>
Benutzen Sie die Toolbar um die Mitteilung zu schliessen um anschliessend die Übersicht der gespeicherten Mitteilungen wieder zu sehen.<br/>
<br/>
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Der Name des Absender.<br />
<br />
<strong><?php echo JText::_( 'Email' ); ?></strong><br />
Die E-Mail Adresse des Absenders.<br/>
<br />
<strong><?php echo JText::_( 'Subject' ); ?></strong><br />
Die Betreffzeile der Mitteilung, welche vom Benutzer im Frontend eingegeben hat.<br/>
<br />
<strong><?php echo JText::_( 'Message' ); ?></strong><br />
Die Mitteilung mit allen selbstdefinierten Feldern, welche im entsprechenden Profil definiert wurden.<br/>
<br />
<strong><?php echo JText::_( 'Send to sender' ); ?></strong><br />
Wenn diese Eigenschaft aktiviert ist, wurde eine Kopie an den Absender per E-Mail geschickt.<br/>
<br />
<strong><?php echo JText::_( 'Sender\'s IP' ); ?></strong><br />
Die IP Adresse des Computers, der das Formular ausgefüllt hat.<br/>
<br />
<strong><?php echo JText::_( 'Date added' ); ?></strong><br />
Das Datum, wann diese Mitteilung über das Frontend gespeichert wurde (sollte +/- identisch mit dem E-Mail Versand sein).<br/>
<br />
</div>
