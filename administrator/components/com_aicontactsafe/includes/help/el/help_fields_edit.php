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
<h4>Επεξεργασία πεδίου</h4>
<p>Εδώ μπορείτε να επεξεργαστείτε ένα πεδίο.</p>
Χρησιμοποιήστε την γραμμή εργαλείων πάνω-δεξιά για να αποθηκεύσετε, να εφαρμόσετε ή να ακυρώσετε τις πληροφορίες που έχουν εισαχθεί στην φόρμα.<br/>
<br/>
Διαβάστε παρακάτω πληροφορίες για κάθε πεδίο της φόρμας : <br />
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Όνομα του πεδίου.<br />
<font color="red">Προσοχή !!!</font><br />
Αυτό δεν μπορεί να τροποποιηθεί για τα πεδία "name", "email", "subject" και "send_to_sender".<br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
Ένδειξη πεδίου.<br />
Μπορείτε να κάνετε χρήση κώδικα HTML, αλλά αποφύγετε να χρησιμοποιείτε εισαγωγικά ( ").<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Εδώ μπορείτε να ρυθμίσετε τις παραμέτρους για των κώδικα HTML που θα δημιουργείται για την ένδειξη του πεδίου.<br />
Για παράδειγμα, μπορείτε να ορίσετε την εμφάνιση ενός πεδίου χρησιμοποιώντας CSS.<br />
Δείτε εδώ <strong><?php echo JText::_( 'Field parameters' ); ?></strong> για περισσότερες πληροφορίες.<br />
<font color="red">Προσοχή !!!</font><br />
Χρησιμοποιείτε μόνο αποστρόφους ( ') σε αυτό το πεδίο. Μην χρησιμοποιείτε εισαγωγικά ( "), αλλιώς δεν θα λειτουργήσουν οι ρυθμίσεις σας.<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Εδώ μπορείτε να καθορίσετε μια διαφορετική ένδειξη πεδίου που θα εμφανίζεται στο μήνυμα.<br />
Μπορείτε να συμπεριλάβετε κώδικα HTML, αλλά μην χρησιμοποιείτε εισαγωγικά ( ").<br />
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Εδώ μπορείτε να ορίσετε τις παραμέτρους του κώδικα HMTL που θα δημιουργείται για την ένδειξη του πεδίου στο μήνυμα.<br />
Για παράδειγμα μπορείτε να ορίσετε τον τρόπο με τον οποίο θα εμφανίζεται το πεδίο χρησιμοποιώντας CSS.<br />
Δείτε εδώ <strong><?php echo JText::_( 'Field parameters' ); ?></strong> για περισσότερες πληροφορίες.<br />
<font color="red">Προσοχή !!!</font><br />
Χρησιμοποιείτε μόνο αποστρόφους ( ') σε αυτό το πεδίο. Μην χρησιμοποιείτε εισαγωγικά ( "), αλλιώς δεν θα λειτουργήσουν οι ρυθμίσεις σας.<br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Ενεργοποιήστε το (επιλέγοντας το) αν θέλετε η ένδειξη να τοποθετηθεί στα δεξιά του πεδίου.<br />
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Επιλέξτε τον τύπο πεδίου. Έχετε τις παρακάτω επιλογές:<br />
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- σύντομο κείμενο<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- πεδίο με δύο τιμές: σωστό ή λάθος<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- μία λίστα τιμών τις οποίες εσείς ορίζετε<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- ένα μεγαλύτερο κείμενο<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- μια λίστα πολλαπλών τιμών και επιλογών<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- μια λίστα πολλαπλών τιμών με μόνο μια πιθανή επιλογή<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- ζήτηση ημερομηνίας. Ένα ημερολόγιο είναι διαθέσιμο για ευκολότερη χρήση<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- ζήτηση ηλεκτρονικής διεύθυνσης για την αποστολή του μηνύματος<br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- εισάγετε μια λίστα ηλεκτρονικών διευθύνσεων από την οποία ο αποστολέας μπορεί να επιλέξει τον παραλήπτη<br />
Δείτε εδώ <strong><?php echo JText::_( 'Field values' ); ?></strong> για οδηγίες χρήσης του πεδίου<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- την λίστα επαφών του Joomla από την οποία ο αποστολέας μπορεί να επιλέξει τον παραλήπτη<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- την λίστα χρηστών του Joomla από την οποία ο αποστολέας μπορεί να επιλέξει τον παραλήπτη<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- πεδίο το οποίο δεν θα εμφανίζεται στην φόρμα επικοινωνίας. Μπορείτε να το χρησιμοποιήσετε για την προσθήκη κειμένου σε όλα τα μηνύματα<br />
Δείτε εδώ <strong><?php echo JText::_( 'Field values' ); ?></strong> για οδηγίες χρήσης του πεδίου<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- προσθήκη κενού μεταξύ δύο πεδίων της φόρμας<br />
</ul>
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
Σε περίπτωση που θέλετε να προσθέσετε πεδίο τύπου <strong><?php echo JText::_( 'Combobox' ); ?></strong>, πεδίο τύπου <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong>, πεδίο τύπου <strong><?php echo JText::_( 'Radio - List' ); ?></strong>, πεδίο τύπου <strong><?php echo JText::_( 'Email - List' ); ?></strong> ή πεδίο τύπου <?php echo JText::_( 'Hidden' ); ?>, εδώ μπορείτε να προσθέσετε τιμές για την εμφάνιση τους στην λίστα.<br />
Για πεδίο τύπου <strong><?php echo JText::_( 'Combobox' ); ?></strong> εισάγετε όλες τις τιμές, διαχωρισμένες με το σύμβολο ";". Για παράδειγμα, για χρώματα: κόκκινο;κίτρινο;πράσινο;μπλε;μαύρο<br />
Για πεδίο τύπου <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> εισάγετε όλες τις τιμές, διαχωρισμένες με το σύμβολο ";". Για παράδειγμα, για χρώματα: κόκκινο;κίτρινο;πράσινο;μπλε;μαύρο<br />
Για πεδίο τύπου <strong><?php echo JText::_( 'Radio - List' ); ?></strong> εισάγετε όλες τις τιμές, διαχωρισμένες με το σύμβολο ";". Για παράδειγμα, για χρώματα: κόκκινο;κίτρινο;πράσινο;μπλε;μαύρο<br />
Για πεδίο τύπου <strong><?php echo JText::_( 'Email - List' ); ?></strong> εισάγετε μια λίστα με ονόματα και ηλεκτρονικές διευθύνσεις, διαχωρισμένες με το σύμβολο ";". Χρησιμοποιήστε ":" μεταξύ ονομάτων και ηλεκτρονικών διευθύνσεων. Για παράδειγμά : Τμήμα Εξυπηρέτησης:service@algis.ro;Τμήμα πωλήσεων:sales@algis.ro;Alexandru Dobrin:alex@algis.ro<br />
Για πεδίο τύπου <strong><?php echo JText::_( 'Hidden' ); ?></strong> εισάγετε το κείμενο το οποίο θέλετε προστίθεται σε όλα τα μηνύματα.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Εδώ μπορείτε να ρυθμίσετε τις παραμέτρους του κώδικα HTML που θα δημιουργείται για το συγκεκριμένο πεδίο.<br />
Για παράδειγμα μπορείτε να ορίσετε τον τρόπο με τον οποίο θα εμφανίζεται το πεδίο χρησιμοποιώντας CSS.<br />
Πιθανών μία από τις πλέον χρησιμοποιημένες παραμέτρους είναι το πλάτος του πεδίου. Για να το τροποποιήσετε μπορείτε να εισάγετε παραμέτρους σε αυτό το πεδίο, πχ.: style='width: 250px;'. Έτσι θα καθοριστεί το πλάτος του σε 250 pixel.<br />
Εισάγετε όλες της τιμές CSS που θέλετε να χρησιμοποιήσετε, σε μια μόνο σειρά παραμετροποίησης, διαχωρίζοντας τες με ";". Για παράδειγμα: style='width:250px;color:red;'<br />
Μπορείτε να βρείτε εδώ : <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a> περισσότερες πληροφορίες σχετικά με CSS.<br />
<font color="red">Προσοχή !!!</font><br />
Χρησιμοποιείτε μόνο αποστρόφους ( ' ) σε αυτό το πεδίο. Μην χρησιμοποιείτε εισαγωγικά ( "), αλλιώς δεν θα λειτουργήσουν οι ρυθμίσεις σας.<br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Εδώ μπορείτε να ορίσετε μια προεπιλεγμένη αξία για το πεδίο.<br />
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Τα πεδία της φόρμας επικοινωνίας θα ταξινομηθούν βάση αυτού του πεδίου.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
<font color="red">Προσοχή !!!</font><br />
Αυτή η τροποποίηση δεν μπορεί να γίνει για τα πεδία "name", "email" και "subject".<br />
Ενεργοποιήστε το (επιλέγοντας το) αν θέλετε να αναγκάζετε τον αποστολέα να συμπληρώνει το συγκεκριμένο πεδίο.<br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Ενεργοποιήστε (επιλέγοντας το) ή απενεργοποιήστε την αποστολή του πεδίου στο μήνυμα.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
<font color="red">Προσοχή !!!</font><br />
Αυτή η τροποποίηση δεν μπορεί να γίνει για τα πεδία "name", "email" και "subject".<br />
Ενεργοποιήστε το (επιλέγοντας το) αν θέλετε το συγκεκριμένο πεδίο να το χρησιμοποιήσετε την φόρμα επικοινωνίας.<br />
<br />
</div>
