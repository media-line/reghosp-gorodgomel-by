<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the control_panel model class of aiContactSafe
class AiContactSafeModelCaptcha extends AiContactSafeModelDefault {

	function getProfile( $pf = 0 ) {
		$selected_profile = null;
		$default_profile = null;
		if ( $pf == 0 ) {
			// get the requested profile id
			$pf = JRequest::getVar('pf', 0, 'request', 'int');
		}
		if ( $pf == 0 ) {
			$postData = $this->_app->_session->get( 'postData:' . $this->_sTask );
			if (is_array($postData) && array_key_exists('pf', $postData)) {
				$pf = (int)$postData['pf'];
			}
		}

		// initialize the database
		$db = &JFactory::getDBO();

		// get the profile values
		$query = 'SELECT * FROM #__aicontactsafe_profiles WHERE ( id = ' . $pf . ' and published = 1 ) or set_default = 1 ORDER by set_default';
		$db->setQuery( $query );
		$profiles = $db->loadObjectList();
		if ( count($profiles) > 0 ) {
			// read the profiles
			foreach($profiles as $profile) {
				if ( $profile->id == $pf ) {
					$selected_profile = $profile;
				}
				if ( $profile->set_default ) {
					$default_profile = $profile;
				}
			}
			// if no profile is selected, use the default one
			if (!$selected_profile) {
				$selected_profile = $default_profile;
			}
		}

		return $selected_profile;
	}

	function getNewCode() {
		// get the requested profile id
		$pf = JRequest::getVar('pf', 0, 'request', 'int');
		$language = JFactory::getLanguage();
		$lang = substr(trim($language->_lang),0,2);
		if ( strlen($lang) == 0 ) {
			$lang = 'en';
		}
		$captcha_file = JURI::root().'index.php?option=com_aicontactsafe&sTask=captcha&task=captcha&id=0&pj_id=0&pf='.$pf.'&lang='.$lang.'&format=raw&set_rand='.mt_rand();
		$newCode = '<img src="'.$captcha_file.'" alt="" id="captcha" border="0" />';

		return $newCode;
	}
}
?>
