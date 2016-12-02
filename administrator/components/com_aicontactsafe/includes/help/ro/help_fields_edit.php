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
<h4>Adaugă / Modifică un câmp</h4>
<p>Această pagină permite adăugarea / modificarea unui câmp.</p>
Folosiți butoanele din dreapta sus pentru a salva, aplica sau renunța la informațiile introduse în formă.<br/>
<br/>
Mai jos găsiți instrucțiuni pentru fiecare dintre câmpurile formei :<br />
<br />
<strong><?php echo JText::_( 'Field name' ); ?></strong><br />
Numele câmpului.<br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
Eticheta câmpului. <br />
Puteți utiliza tag-uri HTML în acest câmp dar nu folosiți ghilimelele (").<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Aici puteți specifica parametrii obiectului HTML care va fi generat pentru eticheta acestui câmp.<br />
De exemplu puteți definii felul cum va fi afișat câmpul folosind CSS.<br />
Pentru mai multe informații vedeți și <strong><?php echo JText::_( 'Field parameters' ); ?></strong>.<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Aici puteți specifica o altă etichetă de folosit în mesaj pentru acest câmp.<br />
Puteți utiliza tag-uri HTML în acest câmp dar nu folosiți ghilimelele (").<br />
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Aici puteți specifica parametrii obiectului HTML care va fi generat pentru eticheta acestui câmp folosită în mesaj.<br />
De exemplu puteți definii felul cum va fi afișat câmpul folosind CSS.<br />
Pentru mai multe informații vedeți și <strong><?php echo JText::_( 'Field parameters' ); ?></strong>.<br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Activați ( bifați ) acest checkbox dacă doriți să plasați eticheta in dreapta câmpului.<br />
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Selectați tipul câmpului. Aveți la dispoziție următoarele opțiuni :<br />
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- un text scurt<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- un câmp cu doar două valori : adevărat sau fals<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- o listă de valori pe care doriți să o definiți<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- un text mai lung<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- o listă cu valori din care se poate selecta<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- o listă cu valori din care se poate selecta una singură<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- solicitați o dată calendaristică. Este disponibil un calendar, pentru o mai ușoară utilizare.<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- solicitați o adresă de web unde să fie trimis mesajul<br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- introduceți o listă de adrese de email dintre care emitentul poate selecta destinația mesajului său<br />
Vedeți <strong><?php echo JText::_( 'Field values' ); ?></strong> pentru instrcțiuni de utilizare a acestui tip de câmp.<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- este generată automat lista contactelor introduse în Joomla, pentru ca emitentul să poată selecta destinația mesajului său<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- este generată automat lista înregistrărilor din SOBI2, pentru ca emitentul să poată selecta destinația mesajului său<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- este generată automat lista utilizatorilor din Joomla, pentru ca emitentul să poată selecta destinația mesajului său<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- un câmp neafișat în forma de contact, care permite adăugarea unui text în mesaj<br />
Vedeți <strong><?php echo JText::_( 'Field values' ); ?></strong> pentru instrcțiuni de utilizare a acestui tip de câmp.<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- adăugați un spațiu între două câmpuri ale formei de contact<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- atașați un fișier la mesaj<br />
</ul>
<br />
<strong><?php echo JText::_( 'Send message' ); ?></strong><br />
Această opțiune este utilizată doar cu tipurile de câmpuri care conțin un email (<?php echo JText::_( 'Email' ); ?>, <?php echo JText::_( 'Email - List' ); ?>, <?php echo JText::_( 'Joomla Contacts' ); ?>, <?php echo JText::_( 'Joomla Users' ); ?>, <?php echo JText::_( 'SOBI2 Entries' ); ?> ).<br />
Dacă este activată ( bifată ) mesajul generat de forma de contact este transmis și către adresa de email conținută de tipul de câmp. Este ignorată pentru restul tipurilor de câmpuri.<br />
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
În cazul în care adăugați un câmp de tip <strong><?php echo JText::_( 'Combobox' ); ?></strong>, <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong>, <strong><?php echo JText::_( 'Radio - List' ); ?></strong> sau <strong><?php echo JText::_( 'Email' ); ?></strong> aici puteți specifica valorile din listă.<br />
Pentru câmp de tip <strong><?php echo JText::_( 'Combobox' ); ?></strong> introduceți toate valorile separate prin ";". De exemplu pentru culori : roșu;galben;verde;albastru;negru.<br />
Pentru câmp de tip <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> introduceți toate valorile separate prin ";". De exemplu pentru culori : roșu;galben;verde;albastru;negru.<br />
Pentru câmp de tip <strong><?php echo JText::_( 'Radio - List' ); ?></strong> introduceți toate valorile separate prin ";". De exemplu pentru culori : roșu;galben;verde;albastru;negru.<br />
Pentru câmp de tip <strong><?php echo JText::_( 'Email' ); ?></strong> introduceți grupuri de nume și adresă de email separate prin ";". Folosiți ":" între nume și adresa de email. De exemplu : Departament service:service@algis.ro;Department vânzări:sales@algis.ro;Alexandru Dobrin:alex@algis.ro.<br />
<br />
<strong><?php echo JText::_( 'Field limit' ); ?></strong><br />
Această opțiune vă permite să specificați o limită de caractere pentru tipurile câmpuri care permit introducerea lor.<br />
Este ignorată de celelalte tipuri de câmpuri.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Aici puteți specifica parametrii obiectului HTML care va fi generat pentru acest câmp.<br />
De exemplu puteți definii felul cum va fi afișat câmpul folosind CSS.<br />
Cred ca unul dintre cei mai utilizați parametrii este lățimea câmpului. Pentru a o modifica puteți folosii următorul text : style='width:250px;'. Aceasta va fixa lățimea la 250px.<br />
Introduceți toate valorile CSS într-un singur parametru "style" separate prin ";". De exemplu : style='width:250px;color:red;'.<br />
Mai multe informații legate de CSS găsiți aici : <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a>.<br />
<br />
<strong><?php echo JText::_( 'Auto fill' ); ?></strong><br />
Aici puteți selecta o sursă din Joomla ( <?php echo JText::_( 'Joomla user name' ); ?> or <?php echo JText::_( 'Joomla user email' ); ?> ) pentru valoarea câmpului dacă utilizatorul este autentificat pe site.<br />
Selectați <?php echo JText::_( '- none -' ); ?> pentru a dezactiva această funcție.<br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Aici puteți specifica o valoare implicită pentru aces câmp.<br />
Puteți utiliza valoarea implicită pentru fiecare tip de câmp astfel:
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- textul implicit<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- 1 pentru a fi implicit bifat, 0 sau gol nebifat<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- poziția din listă care să fie selectată implicit pornind de la 0 ( 0 pentru prima, 1 pentru a doua, 2 pentru a treia și așa mai departe )<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- textul implicit<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- o listă cu 1 ( bifat ) și 0 ( nebifat ) separate prin ; pentru fiecare poziție din listă ( 1;0;0;1 pentru prima bifată, a doua nebifată, a treia nebifată, a patra bifată )<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- poziția care să fie selectată implicit<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- data in format aaaa-ll-dd ( an-lună-zi )<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- email-ul implicit ( nu este recomadată folosirea acestei opțiuni deoarece acest email poate fi găsit de spammer-i ) <br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- poziția din listă care să fie selectată implicit pornind de la 0 ( 0 pentru prima, 1 pentru a doua, 2 pentru a treia și așa mai departe )<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- identificatorul contactului<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- identificatorul utilizatorului<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- identificatorul înregistrării din SOBI2<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- irelevant<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- irelevant<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- irelevant<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Ordonarea câmpurilor în forma de contact se va face în funcție de acest câmp.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
Activați ( bifați ) acest checkbox dacă doriți să obligați expeditorul să completeze acest câmp.<br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Activați ( bifați ) sau dezactivați transmiterea acestui câmp în mesaj.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Activați ( bifați ) acest checkbox dacă doriți să folosiți acest câmp în forma de contact.<br />
<br />
</div>
