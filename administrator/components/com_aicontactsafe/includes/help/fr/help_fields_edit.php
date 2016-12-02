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
<h4>Modifier un champ</h4>
<p>Ici vous pouvez modifier un champ.</p>
Utiliser la barre de boutons du coin supérieur droit pour sauver, appliquer ou annuler les informations entrées dans les formulaire.<br/>
<br/>
Voici l'aide pour chacun des champs de cette page :<br />
<br />
<strong><?php echo JText::_( 'Name' ); ?></strong><br />
Nom du champ.<br />
<font color="red">Attention !!!</font><br />
Les champs suivants ne peuvent être modifiés: "name", "email", "subject" and "send_to_sender".<br />
<br />
<strong><?php echo JText::_( 'Field label' ); ?></strong><br />
L'étiquette du champ. <br />
Vous pouvez utiliser ici des étiquettes HTML mais vous ne pouvez pas utiliser les guillemets (").<br />
<br />
<strong><?php echo JText::_( 'Label parameters' ); ?></strong><br />
Vous pouvez définir ici les paramètres de l'étiquette HTML qui sera générée pour l'étiquette du champ.<br />
Vous pouvez, par exemple, déterminer la façon dont sera affiché le champ en utilisant des propriétés CSS.<br />
Voir <strong><?php echo JText::_( 'Field parameters' ); ?></strong> pour plus d'information.<br />
<font color="red">Attention !!!</font><br />
Utilisez seulement les apostrophes (') dans ce champ. N'utilisez pas les guillemets (") car vos paramètres ne seront pas appliqués.<br />
<br />
<strong><?php echo JText::_( 'Field label in message' ); ?></strong><br />
Vous pouvez définir ici une étiquette différente à utiliser pour ce champ dans le message.<br />
Vous pouvez utiliser ici des étiquettes HTML mais vous ne pouvez pas utiliser les guillemets (").<br />
<br />
<strong><?php echo JText::_( 'Label in message parameters' ); ?></strong><br />
Vous pouvez définir ici les paramètres de l'étiquette HTML qui sera générée pour l'étiquette du champ dans le message.<br />
Vous pouvez encore ici, déterminer la façon dont sera affiché le champ en utilisant des propriétés CSS.<br />
Voir <strong><?php echo JText::_( 'Field parameters' ); ?></strong> pour plus d'information.<br />
<font color="red">Attention !!!</font><br />
Utilisez seulement les apostrophes (') dans ce champ. N'utilisez pas les guillemets (") car vos paramètres ne seront pas appliqués.<br />
<br />
<strong><?php echo JText::_( 'Label after field' ); ?></strong><br />
Activé (lorsque coché) si vous désirez placer l'étiquette à la droite du champ.<br />
<br />
<strong><?php echo JText::_( 'Field type' ); ?></strong><br />
Sélectionnez le type du champ. Vous pouvez choisir l'une des options suivantes :<br />
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- un court texte<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- un champ booléen : vrai ou faux<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- une liste de valeurs que vous désirez définir<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- un texte plus long<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- une liste de valeurs parmis lesquelles on peut choisir une ou plusieurs<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- une liste de valeurs parmis lesquelles on peut choisir une seule<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- une date. Un calendrier est disponible pour une sélection facile.<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- une adresse courriel à laquelle envoyer un message.<br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- entrer une liste d'adresses courriel parmis lesquelles l'expéditeur peut choisir la destination de son message<br />
Voir <strong><?php echo JText::_( 'Field values' ); ?></strong> pour savoir comment utiliser ce champ<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- une liste de contacts ajoutés dans Joomla à partir de laquelle l'expéditeur peut choisir la destination de son message<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- une liste d'usagers ajoutés dans Joomla à partir de laquelle l'expéditeur peut choisir la destination de son message<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- une liste d'entrées dans SOBI2 à partir de laquelle l'expéditeur peut choisir la destination de son message<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- un champ qui ne sera pas visible sur le formulaire. Vous pouvez l'utiliser pour placer un texte dans tous les messages.<br />
Voir <strong><?php echo JText::_( 'Field values' ); ?></strong> pour savoir comment utiliser ce champ<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- ajouter un espace entre deux champs du formulaire<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- attacher (joindre) un fichier au message<br />
</ul>
<br />
<strong><?php echo JText::_( 'Field values' ); ?></strong><br />
Dans le cas où vous voulez ajouter un champ <strong><?php echo JText::_( 'Combobox' ); ?></strong> , un champ <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> un champ <strong><?php echo JText::_( 'Radio - List' ); ?></strong> un champ <strong><?php echo JText::_( 'Email - List' ); ?></strong> ou un champ <?php echo JText::_( 'Hidden' ); ?> , c'est ici que vous pouvez ajouter les valeurs de ce champ.<br />
Pour un champ <strong><?php echo JText::_( 'Combobox' ); ?></strong> entrez toutes les valeurs séparées par un point-virgule ";". Par exemple les couleurs : rouge;jaune;vert;bleu;noir.<br />
Pour un champ <strong><?php echo JText::_( 'Checkbox - List' ); ?></strong> entrez toutes les valeurs séparées par un point-virgule ";". Par exemple les couleurs : rouge;jaune;vert;bleu;noir.<br />
Pour un champ <strong><?php echo JText::_( 'Radio - List' ); ?></strong> entrez toutes les valeurs séparées par un point-virgule ";". Par exemple les couleurs : rouge;jaune;vert;bleu;noir.<br />
Pour un champ <strong><?php echo JText::_( 'Email - List' ); ?></strong> entrez la liste de noms et d'adresses courriel séparées par un point-virgule ";". Utilisez ":" entre le nom et l'adresse courriel. Par exemple : Département de Service:service@algis.ro;Département des ventes :sales@algis.ro;Alexandru Dobrin:alex@algis.ro.<br />
Pour un champ <strong><?php echo JText::_( 'Hidden' ); ?></strong> entrez le texte que vous désirez ajouter à tous les messages.<br />
<br />
<strong><?php echo JText::_( 'Field parameters' ); ?></strong><br />
Vous pouvez définir ici les paramètres de l'étiquette HTML qui seront générés pour ce champ.<br />
Par exemple, vous pouvez déterminer la façon dont sera affiché le champ en utilisant des proptiétés CSS.<br />
Je pense à l'un des paramètres les plus utilisés, soit la largeur du champ. Pour la modifier vous pouvez entrer le texte suivant dans le champ : style='width:250px;'. Cela ajustera la largeur à 250px.<br />
Entrez toutes les valeurs CSS désirées dans un seul paramètre de style séparées par des points-virgule ";". Par exemple : style='width:250px;color:red;'.<br />
Vous pouvez trouver ici : <a href="http://www.w3schools.com/css/default.asp" target="_blank">http://www.w3schools.com/css/default.asp</a> davantage d'informations au sujet des CSS.<br />
<font color="red">Attention !!!</font><br />
Utilisez seulement les  apostrophes (') dans ce champ. N'utilisez pas les guillemets (") car vos paramètres ne seront pas appliqués.<br />
<br />
<strong><?php echo JText::_( 'Default value' ); ?></strong><br />
Vous pouvez définir ici une valeur par défaut pour le champ.<br />
La valeur par défaut pour chaque type de champ étant:
<ul>
<li><strong><?php echo JText::_( 'Textbox' ); ?></strong></li>
- texte par défaut<br />
<li><strong><?php echo JText::_( 'Checkbox' ); ?></strong></li>
- 1 si vous désirez que ce champ soit coché par défaut, sinon 0 ou vide<br />
<li><strong><?php echo JText::_( 'Combobox' ); ?></strong></li>
- la position de l'item que vous désirez voir sélectionné par défaut commencant par 0 ( 0 pour le premier, 1 pour le second, 2 pour le troisième et ainsi de suite )<br />
<li><strong><?php echo JText::_( 'Editbox' ); ?></strong></li>
- texte par défaut<br />
<li><strong><?php echo JText::_( 'Checkbox - List' ); ?></strong></li>
- une liste de 1 ( pour coché ) et 0 ( pour décoché ) par un point-virgule ";" pour chaque item dans la liste ( 1;0;0;1 le premier coché, le second décoché, le troisième décoché, le quatrième coché )<br />
<li><strong><?php echo JText::_( 'Radio - List' ); ?></strong></li>
- l'item que vous désirez voir sélectionné par défaut<br />
<li><strong><?php echo JText::_( 'Date' ); ?></strong></li>
- une date au format yyyy-mm-jj ( année-mois-jour )<br />
<li><strong><?php echo JText::_( 'Email' ); ?></strong></li>
- l'adresse courriel par défaut ( pas recommandé du fait qu'elle peut être découverte par les 'spammers' ) <br />
<li><strong><?php echo JText::_( 'Email - List' ); ?></strong></li>
- la position de l'adresse courriel que vous désirez voir sélectionnée par défaut commencant par 0 ( 0 pour la première, 1 pour la seconde, 2 pour la troisième et ainsi de suite )<br />
<li><strong><?php echo JText::_( 'Joomla Contacts' ); ?></strong></li>
- le id du contact<br />
<li><strong><?php echo JText::_( 'Joomla Users' ); ?></strong></li>
- le id de l'usager<br />
<li><strong><?php echo JText::_( 'SOBI2 Entries' ); ?></strong></li>
- le id de l'entrée SOBI2<br />
<li><strong><?php echo JText::_( 'Hidden' ); ?></strong></li>
- non applicable pour ce champ<br />
<li><strong><?php echo JText::_( 'Separator' ); ?></strong></li>
- non applicable pour ce champ<br />
<li><strong><?php echo JText::_( 'File' ); ?></strong></li>
- non applicable pour ce champ<br />
</ul>
<br />
<strong><?php echo JText::_( 'Order' ); ?></strong><br />
Ce champ sera utilisé pour déterminer l'ordre des champs du formulaire.<br />
<br />
<strong><?php echo JText::_( 'Field required' ); ?></strong><br />
<font color="red">Attention !!!</font><br />
Cela ne peut être modifié pour les champs: "name", "email" and "subject".<br />
Actif ( coché ) si vous désirez que l'expéditeur doive compléter ce champ.<br />
<br />
<strong><?php echo JText::_( 'Add in message' ); ?></strong><br />
Actif ( coché ) ou désactive l'envoi de ce champ dans le message.<br />
<br />
<strong><?php echo JText::_( 'Published' ); ?></strong><br />
<font color="red">Attention !!!</font><br />
Cela ne peut être modifié pour les champs: "name", "email" and "subject".<br />
Actif ( coché ) si vous désirez utiliser ce champ dans le formulaire.<br />
<br />
</div>
