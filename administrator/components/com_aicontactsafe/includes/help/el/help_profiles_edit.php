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
<h4>Επεξεργασία προφίλ</h4>
<p>Εδώ μπορείτε να επεξεργαστείτε ένα προφίλ.</p>
Χρησιμοποιήστε την γραμμή εργαλείων πάνω-δεξιά για να αποθηκεύσετε, να εφαρμόσετε ή να ακυρώσετε τις πληροφορίες που έχουν εισαχθεί στην φόρμα.<br/>
<br/>
Διαβάστε παρακάτω πληροφορίες για κάθε πεδίο της φόρμας :<br />
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Όνομα του προφίλ.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Ενεργοποιήστε ( επιλεγμένο ) ή απενεργοποιήσετε τις προεπιλεγμένες ρυθμίσεις του CSS του aiContactSafe στο Frontend.<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
Ενεργοποιήστε ( επιλεγμένο ) ή απενεργοποιήσετε την ασφάλεια (captcha) όταν υποβάλλονται πληροφορίες στο Frontend.<br />
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Ρυθμίστε το πλάτος της εικόνας με τον κωδικό captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Ρυθμίστε το ύψος της εικόνας με τον κωδικό captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Ορίστε το χρώμα φόντου της εικόνας με τον κωδικό captcha.<br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Ρυθμίστε τα χρώματα τα οποία η εικόνα με τα το κωδικό captcha μπορεί να χρησιμοποιήσει. Εισάγετε τα χρώματα διαχωρίζοντας τα με το σύμβολο ";" και βεβαιωθείτε ότι είναι ορατά επί του χρώματος του φόντου.<br />
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Καθορίστε την διεύθυνση ηλεκτρονικού ταχυδρομείου στην οποία θα αποστέλλονται οι πληροφορίες της φόρμας επικοινωνίας.<br />
Αν το αφήσετε κενό, θα χρησιμοποιηθεί η προεπιλεγμένη διεύθυνση ηλεκτρονικού ταχυδρομείου του Joomla.<br />
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
Επιβάλετε το μήνυμα να σταλεί στην ηλεκτρονική διεύθυνση που αναφέρεται παραπάνω, ακόμη και αν ένα από τα προσαρμοσμένα πεδία που χρησιμοποιούνται σε αυτό το προφίλ περιέχουν ηλεκτρονική διεύθυνση στην οποία πρόκειται να σταλεί το μήνυμα.<br />
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Καθορίστε το κείμενο το οποίο θα προστίθεται ως πρόθεμα στο θέμα του μηνύματος, για την εύκολη αναγνώριση των ηλεκτρονικών μηνυμάτων.<br />
Αν το αφήσετε κενό, θα χρησιμοποιηθεί η προκαθορισμένη ονομασία του ιστοχώρου που έχει καθοριστεί στις Γενικές Ρυθμίσεις του Joomla.<br />
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Ενεργοποιήστε ( επιλέγοντας το ) ή απενεργοποιήσετε την καταγραφή μηνυμάτων στην βάση δεδομένων.<br />
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Μορφή ημερομηνίας των προσαρμοσμένων πεδίων για την εισαγωγή ημερομηνίας.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
Όταν χρησιμοποιείτε ένα προσαρμοσμένο πεδίο για την εισαγωγή ημερομηνίας, τα έτη παρουσιάζονται σε μια λίστα. Το πεδίο αυτό ορίζει το ελάχιστο έτος, αρχίζοντας από το τρέχον έτος.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
Όταν χρησιμοποιείτε ένα προσαρμοσμένο πεδίο την εισαγωγή ημερομηνίας, τα έτη παρουσιάζονται σε μια λίστα. Το πεδίο αυτό ορίζει το μέγιστο έτος, αρχίζοντας από το τρέχον έτος.<br />
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
Οι χαρακτήρες που θα σηματοδοτούν τα υποχρεωτικά πεδία. <br />
Μπορείτε να χρησιμοποιήσετε κώδικα HTML, αλλά αποφύγετε την χρήση εισαγωγικών ( ").<br />
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Εδώ μπορείτε να προσθέσετε μια διεύθυνση ή οποιαδήποτε άλλη πληροφορία επαφής που θεωρείτε ότι είναι αναγκαία στην φόρμα επικοινωνίας.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
Το πεδίο αυτό ελέγχει τον τρόπο με το οποίο οι πληροφορίες επαφής ( που ορίστηκαν στο προηγούμενο πεδίο ) εμφανίζονται στο Frontend. Έχετε τις εξής επιλογές :<br />
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?></li></em></strong>
- να μην εμφανίζονται οι πληροφορίες επαφής<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
- να εμφανίζονται πάνω από την φόρμα επικοινωνίας οι πληροφορίες επαφής<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
- να εμφανίζονται στη δεξιά πλευρά της φόρμας επικοινωνίας οι πληροφορίες επαφής<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
- να εμφανίζονται κάτω από την φόρμα επικοινωνίας οι πληροφορίες επαφής<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
- να εμφανίζονται στην αριστερή πλευρά της φόρμας επικοινωνίας οι πληροφορίες επαφής<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Εισάγετε Γενική Περιγραφή (Meta) για τη φόρμα επικοινωνίας.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Εισάγετε Γενικές Λέξεις-Κλειδιά (Meta) σχετικά με τη φόρμα επικοινωνίας.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
Το ευχαριστήριο κείμενο που θα εμφανίζεται στην οθόνη όταν το μήνυμα έχει αποσταλεί επιτυχώς.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Ορισμός αυτού του προφίλ ως προεπιλεγμένο, εφόσον δεν έχει καθοριστεί κάποιο άλλο.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Ενεργοποιήστε ( επιλεγμένο ) ή να απενεργοποιήσετε αυτό το προφίλ.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Επιλέξτε τα πεδία που θα χρησιμοποιούνται σε αυτό το προφίλ.<br />
<br />
</div>
