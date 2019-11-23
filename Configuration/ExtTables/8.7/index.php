<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;


/**
 * Register Plugins
 */
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel 1',
  'slickcarousel'
        ), 'CType'
);
// #i0018, 17-03-02, dwildt, 6+
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel 2',
  'slickcarousel2'
        ), 'CType'
);
// #i0018, 17-03-02, dwildt, 6+
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel 3',
  'slickcarousel3'
        ), 'CType'
);
ExtensionManagementUtility::addPlugin(
        array(
  'Slick Content Element',
  'slickitem'
        ), 'CType'
);