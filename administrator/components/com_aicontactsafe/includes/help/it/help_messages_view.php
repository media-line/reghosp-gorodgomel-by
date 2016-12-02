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
<h4>Visualizza un messaggio</h4>
<p>In questa videata potrai visualizzare i messaggi ricevuti.</p>
Utilizza la barra strumenti in alto a destra per chiudere il messaggio corrente e tornare all'elenco messaggi.<br/>
<br/>
Di seguito le istruzioni specifiche per ogni campo:<br />
<br />
<strong><?php echo JText::_( 'Nome' ); ?></strong><br />
Nome del mittente del messaggio.<br />
<br />
<strong><?php echo JText::_( 'Email' ); ?></strong><br />
Indirizzo email del mittente del messaggio.<br />
<br />
<strong><?php echo JText::_( 'Oggetto' ); ?></strong><br />
Oggetto del messaggio dell'email.<br />
<br />
<strong><?php echo JText::_( 'Messaggio' ); ?></strong><br />
Corpo del messaggio con tutti i moduli personalizzati inseriti tramite aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Invia al mittente' ); ?></strong><br />
Se selezionata, una copia del messaggio è stata inviata anche al mittente.<br />
<br />
<strong><?php echo JText::_( 'IP del Mittente' ); ?></strong><br />
L'indirizzo IP dal quale è stato inviato il messaggio.<br />
<br />
<strong><?php echo JText::_( 'Data di Inserimento' ); ?></strong><br />
La data in cui è stato spedito il messaggio.<br />
<br />
</div>
