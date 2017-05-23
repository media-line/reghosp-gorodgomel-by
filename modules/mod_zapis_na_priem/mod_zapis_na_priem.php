<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_footer
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$document = JFactory::getDocument();
$document->addStyleSheet("modules/mod_zapis_na_priem/mod_zapis.css",'text/css',"screen");
$document->addScript("modules/mod_zapis_na_priem/mod_zapis_na_priem.js");
$document->addScript("jquery-3.1.1.min.js");

require(JModuleHelper::getLayoutPath('mod_zapis_na_priem', $params->get('layout', 'default')));