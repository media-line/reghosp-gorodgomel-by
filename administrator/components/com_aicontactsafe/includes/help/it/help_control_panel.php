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
<p>Di seguito troverai le istruzioni specifiche per ogni campo del <?php echo JText::_( 'Pannello di Controllo' ); ?> : </p>
<br />
<strong><?php echo JText::_( 'Attiva CSS per aiContactSafe nel backend' ); ?></strong><br />
Attiva (se selezionato) o disattiva i fogli stile CSS anche nel backend di aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Attiva la Guida in Linea' ); ?></strong><br />
Seleziona questa voce per abilitare la guida in linea del backend.<br />
<br />
<strong><?php echo JText::_( 'Formato data' ); ?></strong><br />
Specifica il formato della data che sara utilizzata da aiContactSafe. Per informazioni consulta <a href="http://www.php.net/manual/en/function.strftime.php" target="_blank">http://www.php.net/manual/en/function.strftime.php</a>.<br />
<br />
<strong><?php echo JText::_( 'Attiva controllo anti-spam'); ?></strong><br />
Attiva (se selezionato) o disattiva il controllo anti-spam. Il controllo analizza i messaggi in uscita controllando le keywords specificate e se presenti non invia i messaggi.<br />
<br />
<strong><?php echo JText::_( 'Blocca i messaggi con' ); ?></strong><br />
Specifica qui le parole chiave per il controllo anti-spam usando il carattere ";" per separarle.<br />
<br />
<strong><?php echo JText::_( 'Salva i messaggi bloccati' ); ?></strong><br />
Se attivati, i messaggi di spam non verranno inviati ma comunque salvati nel database.<br />
<br />
<strong><?php echo JText::_( 'Attiva il ban per IP' ); ?></strong><br />
Attiva (se selezionato) o disattiva il ban dell\' IP. Se la voce e\' abilitata gli utenti provenienti da determinati IP non potranno accedere al modulo di contatto.<br />
<br />
<strong><?php echo JText::_( 'IP da bannare' ); ?></strong><br />
Specifica gli IP da bannare: i valori vanno separati dal carattere  ";". Usando il carattere jolly "*" si possono definire intere classi di banning. Ad esempio 123.127.7.* provvedera a bannare tutti gli IP nello scope 123.123.7.<br />
<br />
<strong><?php echo JText::_( 'Redireziona gli IP bannati su' ); ?></strong><br />
Specifica la pagina in cui saranno rediretti gli IP bannati. La pagina predefinita e\' la homepage.<br />
<br />
<strong><?php echo JText::_( 'Attiva Artio' ); ?></strong><br />
In caso di uso di Artio per SEO, e\' possibile utilizzare il plug-in di Artio in aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Attiva Joom!Fish' ); ?></strong><br />
In caso di uso di Joom!Fish per siti multilingua, e\' possibile  abilitarne il supporto all\'interno di aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Rimuovi tabelle dal database' ); ?></strong><br />
Questo pulsante rimuovera tutte le tabelle generate dal modulo all\'interno del database del CMS. E\' la procedura da eseguire per la disinstallazione del componente.<br />
<font color="red">Attenzione!!!<br />
L\'operazione riuovera in modo permanente ogni tabella di aiContactSafe senza possibilita\' di recupero.</font><br />
<br />
</div>
