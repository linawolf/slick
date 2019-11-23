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
  'Slick: Carousel Item',
  'slickitem'
        ), 'CType'
);


/**
 * Page tree icons
 */

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );

$extIcon = array(
		'identifier' => 'contains-slickdefault'
		, 'key' => 'slick' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Slick'
		, 'source' => 'EXT:slick/ext_icon.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
		$extIcon[ 'label' ]
		, $extIcon[ 'key' ]
		, $extIcon[ 'identifier' ]
);
$TCA[ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $extIcon[ 'identifier' ] ] = $extIcon[ 'identifier' ];