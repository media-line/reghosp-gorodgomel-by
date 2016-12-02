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
<p>Παρακάτω μπορείτε να διαβάσετε τις οδηγίες για κάθε ένα από τα πεδία του <?php echo JText::_( 'Control Panel' ); ?> : </p>
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Ενεργοποίηση ( επιλεγμένο ) ή απενεργοποίηση του προεπιλεγμένου CSS για το Backend του aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Επιλέξτε το αν θέλετε να εμφανίζονται οι οδηγίες στο Βackend.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong><br />
Εισάγετε τη μορφή της ημερομηνίας που θα χρησιμοποιείται από την εφαρμογή για την προβολή πεδίων ημερομηνίας. Δείτε εδώ <a href="http://www.php.net/manual/en/function.strftime.php" target="_blank">http://www.php.net/manual/en/function.strftime.php</a> για περισσότερες πληροφορίες.<br />
<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong><br />
Ενεργοποίηση ( επιλεγμένο ) ή να απενεργοποίηση του έλεγχου για Spam. Το συγκεκριμένο ενεργοποιεί τον έλεγχο μηνυμάτων για συγκεκριμένες λέξεις και σε περίπτωση που εντοπιστεί μια από αυτές, δεν αποστέλνεται το μήνυμα.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Καθορίστε λέξεις, οι οποίες όταν εντοπίζονται σε μηνύματα, αυτά θα επισημαίνονται ως Spam. Διαχωρίστε τις λέξεις με το σύμβολο ";".<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
Αν το ενεργοποιήσετε ( επιλέγοντας το ) τα μηνύματα που χαρακτηρίζονται ως Spam και δεν αποστέλνονται, θα καταγράφονται στην βάση δεδομένων.<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Ενεργοποίηση ( επιλεγμένο ) ή να απενεργοποίηση της απαγόρευση συγκεκριμένων IP. Αν το ενεργοποιήσετε, οι επισκέπτες από της συγκεκριμένες IP, δεν θα είναι σε θέση να έχουν πρόσβαση στη φόρμα επικοινωνίας.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />
Καθορίστε τις IP που θέλετε να θέσετε υπό απαγόρευση. Διαχωρίστε τις μεταξύ τους με το σύμβολο ";". Επίσης μπορείτε να χρησιμοποιήσετε το "*" για να καθορίσετε μια ολόκληρη κατηγορία. Για παράδειγμα το 123.123 .*.* θα απαγορεύσει όλες τις IP που αρχίζουν με 123.123.<br />
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Καθορίστε τη σελίδα στην οποία θα οδηγούνται απορριφθέντες IP. Ως προεπιλογή, χρησιμοποιείται η αρχική σελίδα.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
Σε περίπτωση που χρησιμοποιείτε Artio για SEO, μπορείτε να ενεργοποιήσετε/απενεργοποιήσετε το ειδικό Πρόσθετο του aiContactSafe για το Artio.<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
Σε περίπτωση που χρησιμοποιείτε Joom!Fish για πολυγλωσσική υποστήριξη, μπορείτε να ενεργοποιήσετε/απενεργοποιήσετε τα contentelements του aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
Το συγκεκριμένο κουμπί διαγράφει όλους τους πίνακες που δημιουργήθηκαν στην βάση δεδομένων μέσο της συγκεκριμένης εφαρμογής. Έτσι σας δίνει την δυνατότητα της πλήρης απεγκατάστασης της εφαρμογής.<br />
<font color="red">Προσοχή !!!<br />
Η συγκεκριμένη ενέργεια διαγράφει όλους τους πίνακες δεδομένων του aiContactSafe και πλέον δεν θα μπορείτε να τους ανακτήσετε.</font><br />
<br />
</div>
