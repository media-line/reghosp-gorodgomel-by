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
<h4>Modifica un campo</h4>
<p>In questa area puoi eseguire modifiche sul campo.</p>
Utilizza la barra strumenti in alto a destra per salvare, applicare o annulare le modifiche apportate al modulo..<br/>
<br/>
Di seguito troverai le indicazioni per ognuno dei campi disponibili:<br />
<br />
<strong><?php echo JText::_( 'Nome' ); ?></strong><br />
Il nome del campo.<br />
<font color="red">Attenzione!</font><br />
Non può essre modificato per i campi "nome", "email", "oggetto" e "invia al mittente".<br />
<br />
<strong><?php echo JText::_( 'Campo Etichetta' ); ?></strong><br />
L'etichetta del campo. <br />
Puoi utilizzare tag HTML per questo campo ma non virgolette (") .<br />
<br />
<strong><?php echo JText::_( 'Etichetta Parametri' ); ?></strong><br />
In questa area puoi specificare i parametri HTML da utilizzare per i tag che sarannog generati per i tag dell'etichetta.<br />
Ad esempio puoi decidere in che modo debbano essere processare le proprietà CSS.<br />
Consulta <strong><?php echo JText::_( 'Campo Parametri' ); ?></strong> per ulteriori informazioni.<br />
<font color="red">Attenzione!</font><br />
Utilizza soltanto il carattere apostrofo (') in questo campo. Non usare le virgolette (") o i settaggi non funzioneranno.<br />
<br />
<strong><?php echo JText::_( 'Etichetta Campo nel Messaggio' ); ?></strong><br />
In questo campo puoi indicare etichette differenti da utilizzare all'interno del mesaggio.<br />
Sono supportati i tag HTML ma non il carattere apostrofo (").<br />
<br />
<strong><?php echo JText::_( 'Parametri Etichetta nel Messaggio' ); ?></strong><br />
Qui puoi definire i tag HTML che saranno generati per l'etichetta del campo nel messaggio.<br />
Ad esempio puoi scegliere in che modo debbano essere visualizzati utilizzando i fogli di stile CSS.<br />
Consulta <strong><?php echo JText::_( 'Parametri Campo' ); ?></strong> per informazioni aggiuntive.<br />
<font color="red">Attenzione!</font><br />
In questo campo è supportato solo il carattere speciale apostrofo ('). Non utilizzare le virgolette (") altrimenti le impostazioni verranno ignorate.<br />
<br />
<strong><?php echo JText::_( 'Etichetta dopo il Campo' ); ?></strong><br />
Se attivato (selezionato) l'etichetta verrà posizionata alla destra del campo.<br />
<br />
<strong><?php echo JText::_( 'Tipo di Campo' ); ?></strong><br />
Seleziona la tipologia del campo tra le seguenti a disposizione:<br />
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- un testo di breve lunghezza<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- un campo con operatori booleani: true o false<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- una lista di valori fra cui scegliere<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- un testo di ampia lunghezza<br />
<li><strong><?php echo JText::_( 'Checkbox - Lista' ); ?></strong></li>
- una lista di valori fra cui scegliere<br />
<li><strong><?php echo JText::_( 'Radio - Lista' ); ?></strong></li>
- una lista di valori fra cui solo una è la scelta possibile<br />
<li><strong><?php echo JText::_( 'Data' ); ?></strong></li>
- il campo per la data, selezionabile utilizzando il calendario.<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- l'email a cui dovrà essere inviata la risposta.<br />
<li><strong><?php echo JText::_( 'Email - Lista' ); ?></strong></li>
- una lista di email fra cui il destinatario potrà scegliere a chi inviare la risposta<br />
Consulta <strong><?php echo JText::_( 'Valori del Campo' ); ?></strong> per ulteriori dettagli su come utilizzare questo campo.<br />
<li><strong><?php echo JText::_( 'Contatti di Joomla' ); ?></strong></li>
- la lista dei contatti aggiunta in Joomla nella quale il destinatario potrà scegliere a chi replicare.<br />
<li><strong><?php echo JText::_( 'Utenti di Joomla' ); ?></strong></li>
- la lista degli utenti aggiunta in Joomla nella quale il destinatario potrà scegliere a chi replicare.<br />
<li><strong><?php echo JText::_( 'Nascosto' ); ?></strong></li>
- un campo nascosto, che non sarà visualizzato all'interno del modulo. Puoi utilizzarlo per inserire un testo/memo in ogni messaggio.<br />
Consulta <strong><?php echo JText::_( 'Valori del Campo' ); ?></strong> per ulteriori dettagli su come utilizzare questo campo.<br />
<li><strong><?php echo JText::_( 'Separatore' ); ?></strong></li>
- aggiunge uno spazio tra due campi in un modulo di contatto.<br />
</ul>
<br />
<strong><?php echo JText::_( 'Valori del Campo' ); ?></strong><br />
Se desideri aggiungere un campo di testo <strong><?php echo JText::_( 'Combobox' ); ?></strong>, una <strong><?php echo JText::_( 'Checkbox - Lista' ); ?></strong>, una <strong><?php echo JText::_( 'Radio - Lista' ); ?></strong>, una <strong><?php echo JText::_( 'Email - Lista' ); ?></strong> o un campo <?php echo JText::_( 'Nascosto' ); ?>,  qui avrai modo di specificare le varie voci inseribili.<br />
Per un <strong><?php echo JText::_( 'Combobox' ); ?></strong> inserisci tutti i valori separandoli con il carattere ";". Ad esempio per i colori: red;yellow;green;blue;black.<br />
Per una <strong><?php echo JText::_( 'Checkbox - Lista' ); ?></strong> inserisci tutti i valori separandoli con il carattere  ";". Ad esempio per i colori: red;yellow;green;blue;black.<br />
Per una <strong><?php echo JText::_( 'Radio - Lista' ); ?></strong> inserisci tutti i valori separandoli con il carattere  ";". Ad esempio per i colori: red;yellow;green;blue;black.<br />
Per una <strong><?php echo JText::_( 'Email - Lista' ); ?></strong> inserisci una lista di nomi ed indirizzi email separandoli con il carattere ";". Utilizza invece i ":" tra il nome e l'indirizzo email per specificare quest'ultimo. Ad esempio: UfficioDiServizio:service@algis.ro;UfficioVendite:sales@algis.ro;Alexandru Dobrin:alex@algis.ro.<br />
Per un <strong><?php echo JText::_( 'Nascosto' ); ?></strong> inserisci qui le note che vorresti fossero presenti nel form ma nascoste.<br />
<br />
<strong><?php echo JText::_( 'Parametri del Campo' ); ?></strong><br />
In questa area puoi specificare i tag HTML che saranno generati per il campo.<br />
Ad esempio potresti utilizzarla per specificare in che modo applicare le proprietà dei fogli di stile CSS.<br />
Uno dei parametri che sicuramente utilizzerai è quello della lunghezza del campo: per definirla puoi inserire semplicemente quanto a seguire: style='width:250px;'. In questo modo la lunghezza sarà fissata a 250px.<br />
E' possibile inserire più paramentri CSS, l'importante è separarli con il carattere ";". Ad esempio: style='width:250px;color:red;'.<br />
Consulta <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a> per approfondimenti sui CSS.<br />
<font color="red">Attenzione!</font><br />
In questo campo è supportato solo il carattere speciale apostrofo ('). Non utilizzare le virgolette (") altrimenti le impostazioni verranno ignorate.<br />
<br />
<strong><?php echo JText::_( 'Valori Predefiniti' ); ?></strong><br />
In questa area puoi specificare i valori predefiniti da applicare al campo.<br />
<br />
<strong><?php echo JText::_( 'Disposizione' ); ?></strong><br />
I campi all'interno del modulo verranno ordinati preservando l'ordine specificato in questo campo.<br />
<br />
<strong><?php echo JText::_( 'Campo Richiesto' ); ?></strong><br />
<font color="red">Attenzione!</font><br />
L'opzione non può essere modificata per i campi "nome", "email" e "oggetto".<br />
Se attivato (selezionato) sarà richiesto espressamente di compilare il campo per continuare.<br />
<br />
<strong><?php echo JText::_( 'Aggiungi nel Messaggio' ); ?></strong><br />
Se attivato (selezionato) o disattivato verrà incluso o meno il campo nell'invio del messaggio.<br />
<br />
<strong><?php echo JText::_( 'Pubblicato' ); ?></strong><br />
<font color="red">Attenzione!</font><br />
L'opzione non può essere modificata per i campi "nome", "email" e "oggetto".<br />
Se attivato (selezionato) il campo verrà incluso nel form di contatto.<br />
<br />
</div>
