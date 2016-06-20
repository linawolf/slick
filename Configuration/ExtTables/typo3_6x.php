<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}


//  * #i0016, 160620, dwildt, 2+
use TYPO3\CMS\Backend\Sprite\SpriteManager;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Include TypoScript
 */
ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base',     'Slick [1] Base' );
ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Carousel', 'Slick [2] Carousel' );
ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Item',     'Slick [3] Carousel Items' );
// 160115, dwildt, 1+
ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/RemoveLLATag', 'Slick [9] +Optimise Localisation' );


GeneralUtility::loadTCA( 'tt_content' );

/**
 * Register Slick Single Item Content Element
 */
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel',
  'slickcarousel'
        ), 'CType'
);


/**
 * Register Custom Fluid Content Element
 */
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel Items',
  'slickitem'
        ), 'CType'
);


// #i0016, dwildt, 9+
/**
 * Register Custom Fluid Content Element
 */
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Slide Show',
  'slickslideshow'
        ), 'CType'
);

/**
 * Page tree icons
 */
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Slick', 'slick', ExtensionManagementUtility::extRelPath( $_EXTKEY ) . 'ext_icon.gif' );
SpriteManager::addTcaTypeIcon( 'pages', 'contains-slick', '../typo3conf/ext/slick/ext_icon.gif' );