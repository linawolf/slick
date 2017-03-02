<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

/**
 * Include TypoScript for tt_content.slickitem: constants
 */
$slickItemTypoScriptConstants = trim( '
plugin.slick {
  item {
    view {
      templateRootPath = EXT:slick/Resources/Private/Templates/
      partialRootPath = EXT:slick/Resources/Private/Partials/
      layoutRootPath = EXT:slick/Resources/Private/Layouts
      settings {
        headerTag = h4
      }
    }
  }
}
' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $_EXTKEY, 'constants', $slickItemTypoScriptConstants
);


/**
 * Include TypoScript for tt_content.slickitem: setup
 */
$slickItemTypoScriptSetup = trim( '
tt_content.slickitem = FLUIDTEMPLATE
tt_content.slickitem {
  file = {$plugin.slick.item.view.templateRootPath}Item/Render.html
  partialRootPath = {$plugin.slick.item.view.partialRootPath}
  layoutRootPath = {$plugin.slick.item.view.layoutRootPath}
  settings {
    headerTag = {$plugin.slick.item.view.settings.headerTag}
    textTag   = {$plugin.slick.item.view.settings.textTag}
  }
}
' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $_EXTKEY, 'setup', $slickItemTypoScriptSetup, 43
);