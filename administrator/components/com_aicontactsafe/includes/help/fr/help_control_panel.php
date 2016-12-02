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
<p>Aide pour chacun des champs de <?php echo JText::_( 'Control Panel' ); ?> : </p>
<br />
<strong><?php echo JText::_( 'Use aiContactSafe css in backend' ); ?></strong><br />
Active (lorsque coché) ou désactive l'usage du CSS de aiContactSafe.<br />
<br />
<strong><?php echo JText::_( 'Activate help' ); ?></strong><br />
Cochez si vous désirez afficher l'aide aiContactSafe ici.<br />
<br />
<strong><?php echo JText::_( 'Date format' ); ?></strong><br />
Entrez le format de date à utiliser par aiContactSafe pour l'affichage des champs date. Voir <a href="http://www.php.net/manual/fr/function.strftime.php" target="_blank">http://www.php.net/manual/fr/function.strftime.php</a> pour plus de détails.<br />
<br />
<strong><?php echo JText::_( 'Activate spam control' ); ?></strong><br />
Active (lorsque coché) ou désactive le contrôle de spam. Lorsque activé, le message ne sera pas envoyé si un mot interdit est trouvé dans ce dernier.<br />
<br />
<strong><?php echo JText::_( 'Block messages with' ); ?></strong><br />
Liste des mots à considérer comme spam lorsque détectés dans un message. Veuillez séparer les mots par un point-vitgule ";".<br />
<br />
<strong><?php echo JText::_( 'Record blocked messages' ); ?></strong><br />
Si activé (coché) le message marqué comme spam sera enregistré dans la base de données.<br />
<br />
<strong><?php echo JText::_( 'Activate IP ban' ); ?></strong><br />
Active (lorsque coché) or désactive le contrôle des adresses IP. Si activé, les visiteurs dont les adresses IP sont spécifiées ne pourront pas accéder au formulaire.<br />
<br />
<strong><?php echo JText::_( 'IPs to ban' ); ?></strong><br />
Liste les adresses IP à bloquer. Veuillez séparer chaque adresse par un point-virgule ";". Vous pouvez utiliser l'astérisque "*" pour spécifier une classe entière. Par exemple, 123.123.*.* bloquera toute adresse IP débutant par 123.123.<br />
<br />
<strong><?php echo JText::_( 'Redirect banned IPs to' ); ?></strong><br />
Spécifie la page vers laquelle seront redirigées les adresse IP bloquées. La page d'accueil est utilisée par défaut.<br />
<br />
<strong><?php echo JText::_( 'Upload attachments folder' ); ?></strong><br />
Spécifie le dossier qui recevra les pièces jointes des messages.<br />
<br />
<strong><?php echo JText::_( 'Maximum attachments size (in bytes)' ); ?></strong><br />
Spécifie la taille maximum des fichiers joints en octets. (1024 Octets = 1 Kilo-octet (Ko); 1048576 Octets = 1 Méga-octet (Mo); 5242880 Bytes = 5 Mo).<br/>
La taille doit être égale ou inférieure au paramètre "upload_max_filesize" du fichier PHP.INI.<br />
Pour plus d'informations, voir cette page : <a href="http://www.php.net/manual/fr/ini.core.php#ini.upload-max-filesize" target="_blank">http://www.php.net/manual/fr/ini.core.php#ini.upload-max-filesize</a>.<br />
<br />
<strong><?php echo JText::_( 'Allowed attachments types' ); ?></strong><br />
Les types de fichiers pouvant être joints. Utiliser la virgule "," pour séparer chacun.<br />
<br />
<strong><?php echo JText::_( 'Attach to email' ); ?></strong><br />
Active (lorsque coché) le droit de joindre des fichiers aux messages. Lorsque désactivé, attacher un fichier se fera par un lien externe.<br />
<br />
<strong><?php echo JText::_( 'Activate Artio' ); ?></strong><br />
Active (lorsque coché) le 'plugin' Artio de aiContactSafe, seulement si Artio pour SEO est installé sur votre site.<br />
<br />
<strong><?php echo JText::_( 'Activate Joom!Fish' ); ?></strong><br />
Active (lorsque coché) la gestion multilingue de aiContactSafe, seulement si Joom!Fish est installé sur votre site.<br />
<br />
<strong><?php echo JText::_( 'Delete database tables' ); ?></strong><br />
Ce bouton supprimara toutes les tables aiContactSafe de la base de donnée. Ceci vous permettra de désinstaller complètement ce composant.<br />
<font color="red">Attention !!!<br />
Toutes les tables de aiContactSafe seront supprimées donc irrécupérables.</font><br />
<br />
</div>
