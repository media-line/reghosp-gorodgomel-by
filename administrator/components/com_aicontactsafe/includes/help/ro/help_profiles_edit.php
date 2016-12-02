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
<h4>Adaugă / Modifică un profil</h4>
<p>Această pagină permite adăugarea / modificarea unui profil.</p>
Folosiți butoanele din dreapta sus pentru a salva, aplica sau renunța la informațiile introduse în formă.<br/>
<br/>
Mai jos găsiți instrucțiuni pentru fiecare dintre câmpurile formei :<br />
<br />
<strong><?php echo JText::_( 'Profile name' ); ?></strong><br />
Numele profilului.<br />
<br />
<strong><?php echo JText::_( 'Field used as name' ); ?></strong><br />
Selectați câmpul pe care doriți să-l utilizați ca nume în emailul transmis. Dacă selectați <?php echo JText::_( 'Default' ); ?> va fi utilizată valoarea definită în Panelul de Control al aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as email' ); ?></strong><br />
Selectați câmpul pe care doriți să-l utilizați ca adresă a expeditorului emailului transmis. Dacă selectați <?php echo JText::_( 'Default' ); ?> va fi utilizată valoarea definită în Panelul de Control al aiContactSafe.<br />
Acest câmp poate fi doar de tip <?php echo JText::_( 'Email' ); ?> or <?php echo JText::_( 'Email - List' ); ?>.<br />
<br />
<strong><?php echo JText::_( 'Field used as subject' ); ?></strong><br />
Selectați câmpul pe care doriți să-l utilizați ca subiect al emailului transmis. Dacă selectați <?php echo JText::_( 'Default' ); ?> va fi utilizată valoarea definită în Panelul de Control al aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Field used as send to sender' ); ?></strong><br />
Selectați câmpul care doriți să determine dacă expeditorul mesajului îl primește și el. Dacă selectați <?php echo JText::_( 'Default' ); ?> mesajul nu va fi trimis și expeditorului.<br />
<br />
<strong><?php echo JText::_( 'Use AJAX to submit the form' ); ?></strong><br />
Activați ( bifați ) sau dezactivați utilizarea AJAX la transmiterea formei către server. Această opțiune va fi activată automat dacă forma de contact este utilizată într-un plugin sau modul.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Activați ( bifați ) sau dezactivați setările implicite CSS ale aiContactSafe în pagina generală.<br />
<br />
<strong><?php echo JText::_( 'CSS code of the profile' ); ?></strong><br />
Aici puteți edita codul CSS folosit cu acest profil. Dacă este lăsat necompletat nu se va utiliza nici un cod CSS.<br />
<br />
<strong><?php echo JText::_( 'Contact form width' ); ?></strong><br />
Stabiliți lățimea formei de contact. Folosiți valoarea 0 pentru a permite browser-ului să determine această lățime.<br />
<br />
<strong><?php echo JText::_( 'Contact information width' ); ?></strong><br />
Stabiliți lățimea informațiilor de contact. Folosiți valoarea 0 pentru a permite browser-ului să determine această lățime.<br />
Dacă folosiți forma de contact deasupra sau dedesuptul informațiilor de contact va fi folosită lățimea maximă stabilită aici.<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
Aveți următoarele opțiuni:<br />
<ul>
<strong><em><li><?php echo JText::_( 'Only for unregistered users' ); ?></li></em></strong>
- va activa CAPTCHA doar dacă utilizatorul nu este autentificat pe site<br />
<strong><em><li><?php echo JText::_( 'Always' ); ?></li></em></strong>
- va activa întotdeauna CAPTCHA<br />
<strong><em><li><?php echo JText::_( 'Never' ); ?></li></em></strong>
- nu va activa niciodată CAPTCHA<br />
</ul>
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Definiți lățimea imaginii cu codul captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Definiți înălțimea imaginii cu codul captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Definiți culoarea de fundal a imaginii cu codul captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha background transparent' ); ?></strong><br />
Activează un fundal transparent pentru codul CAPTCHA.<br />
Va trebui totuși să stabiliți o culoare de fundal pentru că aceasta va fi utilizată ca un contur în jurul codului CAPTCHA.<br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Definiți culorile folosite de imaginiea cu codul captcha. Folosiți ";" pentru a le separa și aveți grijă să fie vizibile pe culoarea de fundal aleasă.<br />
<br />
<strong><?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?></strong><br />
Activați generarea unui șir aleator pentru codul CAPTCHA. Această opțiune va dezactiva utilizarea fișierelor de cuvinte și va genera un șir aleator de caractere care va fi utilizat pentru codul CAPTCHA.<br />
<br />
<strong><?php echo JText::_( 'Mininum word length' ); ?></strong><br />
Specificați numărul minim de litere pe care să le aibă șirul aleator. Această opțiune este folosită doar când <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?> este activată.<br />
<br />
<strong><?php echo JText::_( 'Maximum word length' ); ?></strong>
Specificați numărul maxim de litere pe care să le aibă șirul aleator. Această opțiune este folosită doar când <?php echo JText::_( 'Use random letters for the CAPTCHA code' ); ?> este activată.<br />
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Specificați adresa de email la care se vor trimite informațiile completate in forma de contact.<br />
Dacă acest câmp este lăsat necompletat, se va utiliza adresa de email implicită din Joomla.<br />
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
La acetivarea acestu câmp mesajul va fi transmis și către adresa de email specificată mai sus chiar dacă în forma de contact a fost adăugat un câmp de tip email către care să fie transmis mesajul.<br />
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Specificați textul de adăugat în fața subiectului mesajului pentru a-l identifica mai ușor.<br />
Dacă acest câmp este lăsat necompletat, se va utiliza numele siteului specificat în panelul de control Joomla.<br />
<br />
<strong><?php echo JText::_( 'Email mode' ); ?></strong><br />
Selectați modul de transmitere a mesajului : în format HTML sau text simplu..<br />
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Activați ( bifați ) sau dezactivați înregistrarea mesajelor în baza de date.<br />
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Specificați forma datei folosite în cadrul câmpurilor de tip dată.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
În câmpurile de tip dată este folosită o listă cu ani. Acest câmp determină anul minim pornind de la anul curent.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
În câmpurile de tip dată este folosită o listă cu ani. Acest câmp determină anul maxim pornind de la anul curent.<br />
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
Caracterul cu care se face marcarea câmpurilor obligatorii.<br />
Puteți utiliza tag-uri HTML în acest câmp dar nu folosiți ghilimelele (").<br />
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Aici puteți adăuga o adresă sau orice alte informații pe care le considerați necesare a apărea in forma de contact.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
Acest câmp controleaza felul cum sunt prezentate informațiile de contact ( specificate mai sus ) în pagina generală. Sunt disponibile următoarele opțiuni :<br />
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?></li></em></strong>
- informațiile de contact nu sunt prezentate<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
- informațiile de contact sunt prezentate deasupra formei de contact<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
- informațiile de contact sunt prezentate în partea dreaptă a formei de contact<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
- informațiile de contact sunt prezentate sub forma de contact<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
- informațiile de contact sunt prezentate în partea stângă a formei de contact<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Adăugați un tag meta description în forma de contact.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Adăugați un tag meta keywords în forma de contact.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
Specificați mesajul de mulțumire afișat la transmiterea cu succes a unui mesaj.<br />
<br />
<strong><?php echo JText::_( 'Redirect on succes URL' ); ?></strong><br />
Specificați adresa web către care va fi redirecționat browser-ul în cazul transmiterii cu succes a mesajului..<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Stabiliți acest profil ca implicit pentru cazurile când un profil nu este specificat.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Activați ( bifați ) sau dezactivați acest profil.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Selectați câmpurile care vor fi folosite în acest profil.<br />
<br />
</div>
