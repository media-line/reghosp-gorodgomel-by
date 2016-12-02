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
<h4>Modifier un profil</h4>
<p>Ici vous pouvez modifier un profil.</p>
Utiliser la barre de boutons du coin supérieur droit pour sauver, appliquer ou annuler les informations entrées dans les formulaire.<br/>
<br/>
Voici l'aide pour chacun des champs de cette page :<br />
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Nom du profil.<br />
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in frontend' ); ?></strong><br />
Active (coché) ou désactive l'usage du CSS de aiContactSafe dans le formulaire.<br />
<br />
<strong><?php echo JText::_( 'Use security code (captcha) in frontend' ); ?></strong><br />
Active (coché) ou désactive la sécurité ( captcha ) quand les informations sont soumises via le formulaire.<br />
<br />
<strong><?php echo JText::_( 'Captcha width' ); ?></strong><br />
Détermine la largeur de l'image contenant le code de sécurité.<br />
<br />
<strong><?php echo JText::_( 'Captcha height' ); ?></strong><br />
Détermine la hauteur de l'image contenant le code de sécurité.<br />
<br />
<strong><?php echo JText::_( 'Captcha background color' ); ?></strong><br />
Détermine la couleur de fond de l'image contenant le code de sécurité.<br />
<br />
<strong><?php echo JText::_( 'Captcha colors' ); ?></strong><br />
Détermine les couleurs utilisées par l'image contenant le code de sécurité. Entrez les couleurs séparées par un point-virgule ";" et vérifiez qu'elles soient visibles sur la couleur de fond.<br />
<br />
<strong><?php echo JText::_( 'Email address' ); ?></strong><br />
Détermine l'addresse courriel à laquelle seront envoyées les informations du formulaire.<br />
Si laissé à blanc, l'adresse courriel par défaut de Joomla sera utilisée.<br />
<br />
<strong><?php echo JText::_( 'Always send to this email address' ); ?></strong><br />
Force l'envoi du message à cette adresse courriel même si un ou l'autres des champs personnalisés sont des adresses courriel à utiliser pour l'envoi du message.<br />
<br />
<strong><?php echo JText::_( 'Email subject prefix' ); ?></strong><br />
Détermine un texte à ajouter au début du sujet pour mieux identifier le courriel.<br />
Si laissé à blanc, le nom du site configuré dans Joomla sera utilisé.<br />
<br />
<strong><?php echo JText::_( 'Record the messages in the database' ); ?></strong><br />
Active (coché) ou désactive l'enregistrement des messages dans la base de données.<br />
<br />
<strong><?php echo JText::_( 'Custom field date format' ); ?></strong><br />
Entrez le format de date à utiliser pour l'affichage des champs personnalisés de type date.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go back' ); ?></strong><br />
Quand vous utilisez un champ date, les années sont proposées dans une liste. Ce champ contrôle le nombre d'années minimum à partir de maintenant.<br />
<br />
<strong><?php echo JText::_( 'Number of years to go forward' ); ?></strong><br />
Quand vous utilisez un champ date, les années sont proposées dans une liste. Ce champ contrôle le nombre d'années maximum à partir de maintenant.<br />
<br />
<strong><?php echo JText::_( 'Mark required fields character' ); ?></strong><br />
Le caractère servant à identifier les champs requis. <br />
Vous pouvez utiliser ici des étiquettes HTML, mais n'utilisez pas les guillemets (").<br />
<br />
<strong><?php echo JText::_( 'Contact information' ); ?></strong><br />
Vous pouvez ajouter ici une adresse, ou toute autre information de référence jugée utile pour le formulaire.<br />
<br />
<strong><?php echo JText::_( 'Display format' ); ?></strong><br />
Ce champ contrôle la façon dont seront affichées les informations de référence (mentionnées dans le champ précédent) dans le formulaire. Les options suivantes se présentent à vous :<br />
<ul>
<strong><em><li><?php echo JText::_( 'Without contact information' ); ?></li></em></strong>
- les informations de référence ne seront pas affichées<br />
<strong><em><li><?php echo JText::_( 'Contact information on top' ); ?></li></em></strong>
- les informations de référence seront affichées au haut du formulaire<br />
<strong><em><li><?php echo JText::_( 'Contact information on the right side' ); ?></li></em></strong>
- les informations de référence seront affichées du côté droit du formulaire<br />
<strong><em><li><?php echo JText::_( 'Contact information on bottom' ); ?></li></em></strong>
- les informations de référence seront affichées au bas du formulaire<br />
<strong><em><li><?php echo JText::_( 'Contact information on the left side' ); ?></li></em></strong>
- les informations de référence seront affichées du côté gauche du formulaire<br />
</ul>
<br />
<strong><?php echo JText::_( 'Meta description' ); ?></strong><br />
Ajoute une méta-description au formulaire.<br />
<br />
<strong><?php echo JText::_( 'Meta keywords' ); ?></strong><br />
Ajoute des méta-informations au formulaire.<br />
<br />
<strong><?php echo JText::_( 'Thank you message' ); ?></strong><br />
Le message à afficher quand le message est bien envoyé au destinataire.<br />
<br />
<strong><?php echo JText::_( 'Default' ); ?></strong><br />
Le profil à utiliser par défaut quand aucun autre profil n'est sélectionné.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
Active (coché) ou désactive ce profil.<br />
<br />
<strong><?php echo JText::_( 'Fields' ); ?></strong><br />
Sélectionne les champs à utiliser pour ce profil.<br />
<br />
</div>
