<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

class SefExt_com_aicontactsafe extends SefExt {

    function beforeCreate(&$uri) {
        // Set the default sTask if not set
        if( is_null($uri->getVar('sTask')) ) {
            $uri->setVar('sTask', 'message');
        }
        // Set the default task if not set
        if( is_null($uri->getVar('task')) ) {
            $uri->setVar('task', 'display');
        }
    }

    function create(&$uri) {
        $vars = $uri->getQuery(true);
        extract($vars);
        
        $title = array();
        $title[] = JoomSEF::_getMenuTitle(@$option, null, @$Itemid);

        $newUri = $uri;
        if (count($title) > 0) {
            $newUri = JoomSEF::_sefGetLocation($uri, $title, null, null, null, @$lang);
        }
        
        return $newUri;
    }

}

?>
