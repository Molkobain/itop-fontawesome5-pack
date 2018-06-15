<?php

namespace Molkobain\iTop\Console\FontAwesome\Extension;

use utils;
use iTopWebPage;
use iPageUIExtension;

class ConsoleUIExtension implements iPageUIExtension
{
    /**
     * Add content to the North pane
     * @param iTopWebPage $oPage The page to insert stuff into.
     * @return string The HTML content to add into the page
     */
    public function GetNorthPaneHtml(iTopWebPage $oPage)
    {
        $sModuleVersion = utils::GetCompiledModuleVersion('molkobain-fontawesome5-pack');
        $oPage->add_linked_stylesheet(utils::GetAbsoluteUrlModulesRoot() . 'molkobain-fontawesome5-pack/fontawesome-free-5.0.13/css/fontawesome-all.min.css?v=' . $sModuleVersion);
    }

    /**
     * Add content to the South pane
     * @param iTopWebPage $oPage The page to insert stuff into.
     * @return string The HTML content to add into the page
     */
    public function GetSouthPaneHtml(iTopWebPage $oPage)
    {
        // Do nothing.
    }

    /**
     * Add content to the "admin banner"
     * @param iTopWebPage $oPage The page to insert stuff into.
     * @return string The HTML content to add into the page
     */
    public function GetBannerHtml(iTopWebPage $oPage)
    {
        // Do nothing.
    }
}
