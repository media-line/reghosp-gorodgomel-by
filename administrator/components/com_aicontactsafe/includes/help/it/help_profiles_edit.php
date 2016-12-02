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
<h4>Modifica un profilo</h4>
<p>In questa videata potrai modificare i profili creati in precedenza.</p>
Utilizza la barra strumenti in alto a destra per modificare, salvare o annullare le modifiche apportate in ogni profilo.<br/>
<br/>
Di seguito le istruzioni dettagliate per ogni campo:<br />
<br />
<strong><?php echo JText::_( 'Nome' ); ?></strong><br />
Nome del profilo.<br />
<br />
<strong><?php echo JText::_( 'Attiva supporto CSS per aiContactSafe nel frontend' ); ?></strong><br />
Attiva (selezionato) o disattiva le impostazioni CSS predefinite di aiContactSafe nel frontend.<br />
<br />
<strong><?php echo JText::_( 'Attiva codice di sicurezza (Captcha) nel frontend' ); ?></strong><br />
Attiva (selezionato) o disattiva la richiesta del codice sicurezza (Captcha) quando le informazioni sono inviate dal frontend.<br />
<br />
<strong><?php echo JText::_( 'Lunghezza Captcha ' ); ?></strong><br />
Imposta la larghezza dell'immagine per il codice di sicurezza Captcha.<br />
<br />
<strong><?php echo JText::_( 'Altezza Captcha ' ); ?></strong><br />
Imposta l'altezza dell'immagine per il codice di sicurezza Captcha.<br />
<br />
<strong><?php echo JText::_( 'Colore sfondo Captcha' ); ?></strong><br />
Imposta il colore di sfondo dell'immagine per il codice di sicurezza Captcha.<br />
<br />
<strong><?php echo JText::_( 'Colori interni Captcha' ); ?></strong><br />
Imposta i colori che saranno utiilizzati all'interno dell'immagine per il codice di sicurezza Captcha. I colori vanno inseriti separati dal carattere ";" e prima di confermare è bene assicurarsi che siano visibili con il colore di sfondo scelto.<br />
<br />
<strong><?php echo JText::_( 'Indirizzo e-mail' ); ?></strong><br />
Definisce l'indirizzo email a cui inviare il risultato del modulo compilato.<br />
Se vuoto, verrà utilizzato quello predefinito da Joomla.<br />
<br />
<strong><?php echo JText::_( 'Invia sempre con questo indirizzo email' ); ?></strong><br />
Forza l'invio del messaggio all'indirizzo email specificato in precedenza anche se all'interno dei campi figurano indirizzi appartenenti allo stesso destinatario.<br />
<br />
<strong><?php echo JText::_( 'Prefisso oggetto email' ); ?></strong><br />
Specifica le stringhe di testo ad aggiungere prima dell'oggetto del messaggio per identificarlo più facilmente.<br />
Se vuoto, verrà utilizzato quello predefinito impostato in Joomla.<br />
<br />
<strong><?php echo JText::_( 'Conserva copia del messaggio nel database' ); ?></strong><br />
Attiva (selezionato) o disattiva il salvataggio di una copia di riserva del messaggio nel database.<br />
<br />
<strong><?php echo JText::_( 'Formato data personalizzato' ); ?></strong><br />
Formato per la data dei campi personalizzati di tipo data.<br />
<br />
<strong><?php echo JText::_( 'Anni da scorrere indietro' ); ?></strong><br />
Utilizzando un campo personalizzato di tipo data, gli anni sono visualizzati all'interno di una lista. Questo campo specificati da quanti anni indietro, a partire dal corrente, mostrare nell'elenco.<br />
<br />
<strong><?php echo JText::_( 'Anni da scorrere avanti' ); ?></strong><br />
Utilizzando un campo personalizzato di tipo data, gli anni sono visualizzati all'interno di una lista. Questo campo specifica fino a quanti anni avanti, a partire dal corrente, mostrare nell'elenco.<br />
<br />
<strong><?php echo JText::_( 'Carattere per campo richiesto' ); ?></strong><br />
I carattere da utilizzare per identificare un campo richiesto (obbligatorio). <br />
E' possibile utilizzare anche codice HTML a patto di non includere il carattere apostrofo (").<br />
<br />
<strong><?php echo JText::_( 'Informazioni di contatto' ); ?></strong><br />
In questo campo puoi specificare informazioni aggiuntive da mostrare all'interno del modulo di contatto, tipicamente dedicate ad offrire un metodo di interazione più rapido (numero telefonico, indirizzo sede o abitazione).<br />
<br />
<strong><?php echo JText::_( 'Modalità di visualizzazione' ); ?></strong><br />
Questo campo permette di definire in che modo dovrà essere visualizzato in modulo all'interno del frontend. E' possibile scegliere tra le seguenti opzioni:<br />
<ul>
<strong><em><li><?php echo JText::_( 'Senza informazioni di contatto' ); ?></li></em></strong>
- le informazioni di contatto non verranno mostrate<br />
<strong><em><li><?php echo JText::_( 'Informazioni di contatto in alto' ); ?></li></em></strong>
- le informazioni di contatto saranno mostrate prima, in alto, del modulo di contatto<br />
<strong><em><li><?php echo JText::_( 'Informazioni di contatto a destra' ); ?></li></em></strong>
- le informazioni di contatto saranno mostrate sulla destra del modulo di contatto<br />
<strong><em><li><?php echo JText::_( 'Informazioni di contatto in basso' ); ?></li></em></strong>
- le informazioni di contatto saranno mostrate dopo, in basso, il modulo di contatto<br />
<strong><em><li><?php echo JText::_( 'Informazioni di contatto a sinistra' ); ?></li></em></strong>
- le informazioni di contatto saranno mostrate sulla sinistra del modulo di contatto<br />
</ul>
<br />
<strong><?php echo JText::_( 'Descrittore META' ); ?></strong><br />
La descrizione per i tag META relativi al profilo.<br />
<br />
<strong><?php echo JText::_( 'Keywords META' ); ?></strong><br />
Le parole chiave per i tag META relativi al profilo.<br />
<br />
<strong><?php echo JText::_( 'Messaggio di ringraziamento' ); ?></strong><br />
Il messaggio da visualizzare a spedizione avvenuta.<br />
<br />
<strong><?php echo JText::_( 'Predefinito' ); ?></strong><br />
Imposta il profilo corrente come predefinito se non espressamente selezionato.<br />
<br />
<strong><?php echo JText::_( 'Pubblicato' ); ?></strong><br />
Attiva (selezionato) o disattiva il profilo.<br />
<br />
<strong><?php echo JText::_( 'Campi' ); ?></strong><br />
Seleziona i campi da utilizzare nel profilo.<br />
<br />
</div>
