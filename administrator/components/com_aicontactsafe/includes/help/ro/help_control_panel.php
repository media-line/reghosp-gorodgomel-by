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
<p>Mai jos găsiți instrucțiuni pentru fiecare dintre parametrii din <?php echo JText::_( 'Control Panel' ); ?> : </p>
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Activați ( bifați ) sau dezactivați setările implicite CSS ale aiContactSafe în pagina de administrare.<br />
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Bifați acest câmp pentru a activa instrucțiunile în pagina de administrare.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong><br />
Specificați forma datei folosite în cadrul aiContactSafe. Mai multe informații găsiți aici : <a href="http://www.php.net/manual/en/function.strftime.php" target="_blank">http://www.php.net/manual/en/function.strftime.php</a>.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Cols' ); ?></strong><br />
Specificați numărul de coloane utilizate de un editbox în forma de contact.<br />
<br />
<strong><?php echo JText::_( 'Default Editbox Rows' ); ?></strong><br />
Specificați numărul de rânduri utilizate de un editbox în forma de contact.<br />
<br />
<strong><?php echo JText::_( 'Default name' ); ?></strong><br />
Specificați numele implicit folosit de aiContactSafe dacă valoarea câmpului "<?php echo JText::_( 'Field used as name' ); ?>" este <?php echo JText::_( 'Default' ); ?>.<br />
Lăsați câmpul gol pentru a utiliza numele site-ului definit în Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default email' ); ?></strong><br />
Specificați adresa de email implicită folosită de aiContactSafe dacă valoarea câmpului "<?php echo JText::_( 'Field used as email' ); ?>" este <?php echo JText::_( 'Default' ); ?>.<br />
Lăsați câmpul gol pentru a utiliza adresa implicită definită în Joomla.<br />
<br />
<strong><?php echo JText::_( 'Default subject' ); ?></strong><br />
Specificați subiectul implicit folosit de aiContactSafe dacă valoarea câmpului "<?php echo JText::_( 'Field used as subject' ); ?>" este <?php echo JText::_( 'Default' ); ?>.<br />
Lăsați câmpul gol pentru a nu adăuga nimic la prefixul subiectului definit în profil.<br />
<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong><br />
Activați ( bifați ) sau dezactivați controlul la spam. Acest câmp va activa verificarea dacă există anumite cuvinte în mesaj. Dacă aceste cuvinte sunt găsite mesajul nu este transmis.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Specificați cuvintele care vor determina marcarea unui mesaj ca spam. Folosiți ";" între cuvinte.<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
Dacă activați ( bifați ) acest câmp mesajele marcate ca spam vor fi înregistrate totuși în baza de date deși nu sunt transmise.<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Activați ( bifați ) sau dezactivați blocarea pe IP. Dacă activați acest câmp visitatorii care vin de la Ip-urile specificate nu vor putea accesa forma de contact.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />
Specificați lista de IP-uri care să fie blocate. Introduceți ";" între ele. Puteți folosi "*" pentru a specifica o clasă întreagă. De exemplu 123.123.*.* va bloca toate IP-urile care încep cu 123.123.<br />
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Specificați pagina unde vor fi redirecționați vizitatorii veniți de la IP-urile blocate. Implicit va fi utilizată prima pagină a site-ului.<br />
<br />
<strong><?php echo JText::_( 'Ban IPs sending messages with blocked words' ); ?></strong><br />
Activați ( bifați ) sau dezactivați blocarea IPurilor de la care se transmit mesaje cu cuvinte blocate.<br />
Dacă această opțiune este activată de fiecare dată când primiți un număr de mesaje cu cuvinte blocate, specificat ( numărul ) mai jos IPul de la care sunt transmise va fi blocat automat.<br />
<br />
<strong><?php echo JText::_( 'Maximum blocked messages before IP ban' ); ?></strong><br />
Specificați numărul de mesaje cu cuvinte blocate care va genera blocarea IPului.<br />
<br />
<strong><?php echo JText::_( 'Minutes to count the blocked messages' ); ?></strong><br />
Specificați perioada de timp în care sunt numărate mesajele cu cuvinte blocate pentru a bloca IPul de la care sunt transmise.<br />
<br />
<strong><?php echo JText::_( 'Email to notify IP ban' ); ?></strong><br />
Specificați adresa de mail la care se vor transmite notificările de blocare a IPurilor.<br />
<br />
<strong><?php echo JText::_( 'Upload attachments folder' ); ?></strong><br />
Specificați folderul unde vor fi încărcate fișierele atașate unui mesaj.<br />
<br />
<strong><?php echo JText::_( 'Maximum attachments size (in bytes)' ); ?></strong><br />
Specificați dimensiunea maximă a unui fișier atașat în bytes.(1024 Bytes = 1KByte; 1048576 Bytes = 1 MByte; 5242880 Bytes = 5 MByte).<br/>
Această dimensiune trebuie să fie egală sau mai mică cu parametrul "upload_max_filesize" din fișierul dvs. PHP.INI.<br />
Pentru mai multe informații puteți vizita următoarea pagină web :<a href="http://www.php.net/manual/ro/ini.core.php#ini.upload-max-filesize" target="_blank">http://www.php.net/manual/ro/ini.core.php#ini.upload-max-filesize</a>.<br />
<br />
<strong><?php echo JText::_( 'Allowed attachments types' ); ?></strong><br />
Specificați tipurile de fișiere care pot fi atașate unui mesaj. Folosiți virgula (,) pentru a le separa.<br />
<br />
<strong><?php echo JText::_( 'Attach to email' ); ?></strong><br />
Fișierul atașat poate fi transmis doar ca un link către fișierul de pe server sau atașat mesajului.<br />
Activați ( bifați ) acest câmp pentru a atașa fișierele mesajului.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
Dacă utilizați Artio pentru SEO, puteți activa sau dezactiva plugin-ul Artio pentru aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
Dacă utilizați Joom!Fish pentru traducerea site-ului, puteți activa sau dezactiva "contentelements" pentru aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
Acest buton permite ștergerea tuturor tabelelor create de aiContactSafe în baza de date. A fost adăugat pentru a permite dezinstalarea completă a componentei.<br />
<font color="red">Atenție !!!<br />
Această operaține va șterge toate tabelele aiContactSafe și acestea nu mai pot fi recuperate.</font><br />
<br />
</div>
