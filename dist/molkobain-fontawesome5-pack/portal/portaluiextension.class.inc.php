<?php

namespace Molkobain\iTop\Portal\FontAwesome\Extension;

use utils;
use AbstractPortalUIExtension;
use Silex\Application;

class PortalUIExtension extends AbstractPortalUIExtension
{
	/**
	 * @inheritdoc
	 */
    public function GetCSSFiles(Application $oApp)
    {
    	$aReturn = array();

    	$aReturn[] = utils::GetAbsoluteUrlModulesRoot() . 'molkobain-fontawesome5-pack/fontawesome-free-5.0.13/css/fontawesome-all.min.css?v=' . utils::GetCompiledModuleVersion('molkobain-fontawesome5-pack');

        return $aReturn;
    }
}
