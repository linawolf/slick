<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;


/**
 * Register Plugins
 */
ExtensionManagementUtility::addPlugin(
				array(
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.1.header',
		'slickcarousel'
				), 'CType'
);
// #i0018, 17-03-02, dwildt, 6+
ExtensionManagementUtility::addPlugin(
				array(
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.2.header',
		'slickcarousel2'
				), 'CType'
);
// #i0018, 17-03-02, dwildt, 6+
ExtensionManagementUtility::addPlugin(
				array(
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.3.header',
		'slickcarousel3'
				), 'CType'
);
// #i0022, 171014, dwildt, +
ExtensionManagementUtility::addPlugin(
				array(
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.1.header',
		'slickgallery'
				), 'CType'
);
ExtensionManagementUtility::addPlugin(
				array(
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.2.header',
		'slickgallery2'
				), 'CType'
);
ExtensionManagementUtility::addPlugin(
				array(
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.3.header',
		'slickgallery3'
				), 'CType'
);
ExtensionManagementUtility::addPlugin(
				array(
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header',
		'slickitem'
				), 'CType'
);


/**
 * Page tree icons
 */

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );

$extIcon = array(
		'identifier' => 'app-slick'
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

/**
 * Page TSConfig
 */
require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/Default/TSconfig/index.php' );
