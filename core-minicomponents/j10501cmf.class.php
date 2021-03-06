<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j10501cmf
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$configurationPanel = $componentArgs[ 'configurationPanel' ];

		$configurationPanel->startPanel(jr_gettext('CMF_CONFIG_TITLE', 'CMF_CONFIG_TITLE', false));

		$configurationPanel->setleft(jr_gettext('CMF_CONFIG_KEY', 'CMF_CONFIG_KEY', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_cmf_license_key" value="'.$jrConfig[ 'cmf_license_key' ].'" />');
		$configurationPanel->setright(jr_gettext('CMF_CONFIG_KEY_DESC', 'CMF_CONFIG_KEY_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
