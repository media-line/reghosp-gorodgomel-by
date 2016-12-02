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
<h4>Voir un message</h4>
<p>C'est ici que vous pouver voir un message.</p>
Utiliser la barre de boutons du coin supérieur droit pour fermer cette fenêtre et retourner à la liste des messages.<br/>
<br/>
Voici l'aide pour chacun des champs de cette page :<br />
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Le nom de l'expéditeur.<br />
<br />
<strong><?php echo JText::_( 'Email' ); ?></strong><br />
L'adresse courriel de l'expéditeur.<br />
<br />
<strong><?php echo JText::_( 'Subject' ); ?></strong><br />
Le sujet du message avec le texte ajouté au début pour faciliter l'identification du courriel.<br />
<br />
<strong><?php echo JText::_( 'Message' ); ?></strong><br />
Le texte du courriel avec tous les champs personnalisés ajoutés dans aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Sent to sender' ); ?></strong><br />
Si coché, une copie du message a été envoyée à l'expéditeur.<br />
<br />
<strong><?php echo JText::_( 'Sender\'s IP' ); ?></strong><br />
L'adresse IP à partir de laquelle le message a été envoyé.<br />
<br />
<strong><?php echo JText::_( 'Date added' ); ?></strong><br />
La date d'envoie du message.<br />
<br />
</div>
