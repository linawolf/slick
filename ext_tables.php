<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}


/**
 * Include TypoScript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base',     'Slick [1] Base' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Carousel', 'Slick [2] Carousel' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Item',     'Slick [3] Carousel Items' );
// 160115, dwildt, 1+
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/RemoveLLATag', 'Slick [9] +Optimise Localisation' );


/**
 * Register Slick Single Item Content Element
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel',
  'slickcarousel'
        ), 'CType'
);


/**
 * Register Custom Fluid Content Element
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel Items',
  'slickitem'
        ), 'CType'
);


// #i0016, dwildt, 9+
/**
 * Register Custom Fluid Content Element
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Slide Show',
  'slickslideshow'
        ), 'CType'
);


\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA( 'tt_content' );


/**
 * Prepare TCA for Custom Fluid Content Element
 */
$TCA[ 'tt_content' ][ 'palettes' ][ 'slickgallery' ][ 'canNotCollapse' ] = '1';
$TCA[ 'tt_content' ][ 'palettes' ][ 'slickgallery' ][ 'showitem' ] = ''
        . 'imagewidth;LLL:EXT:cms/locallang_ttc.xlf:imagewidth_formlabel,'
        . 'imageheight;LLL:EXT:cms/locallang_ttc.xlf:imageheight_formlabel,'
        . 'tx_imagecrop_crop,tx_imagecrop_gravity,'
        . 'section_frame;LLL:EXT:cms/locallang_ttc.xlf:section_frame_formlabel,'
;

// #i0016, dwildt, +
$TCA[ 'tt_content' ][ 'types' ][ 'slickslideshow' ][ 'showitem' ] = ''
        . '  --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,'
        . '    hidden,'
        . '    header,'
        . '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.images,'
        . '	 --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.image_settings;slickgallery,'
        . '	 image,'
        . '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.appearance,'
        . '	 --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,'
;
//unset($TCA[ 'tt_content' ][ 'types' ][ 'slickslideshow' ][ 'showitem' ]);
//$TCA[ 'tt_content' ][ 'types' ][ 'slickslideshow' ][ 'showitem' ] = $TCA[ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];


//$TCA[ 'tt_content' ][ 'types' ][ 'slickitem' ][ 'showitem' ] = $TCA[ 'tt_content' ][ 'types' ][ 'textpic' ][ 'showitem' ];
//$TCA[ 'tt_content' ][ 'types' ][ 'slickitem' ][ 'showitem' ] = ''
//        . '  --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,'
//        . '  --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.header;header,'
//        . '    bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],'
//        . '    rte_enabled;LLL:EXT:cms/locallang_ttc.xlf:rte_enabled_formlabel,'
//        . '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.images,'
//        . '	 image,'
//        . '  --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.imagelinks;imagelinks,'
//        . '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.appearance,'
//        . '	 --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,'
//        . '	 --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.image_settings;image_settings,'
//        . '  --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.imageblock;imageblock,'
//        . '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,'
//        . '	 --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,'
//        . '  --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,'
//        . '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended,'
//        . '--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category, '
//        . '  categories'
//;

$TCA[ 'tt_content' ][ 'types' ][ 'slickitem' ][ 'showitem' ] = ''
        . '  --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,'
        . '    hidden,'
        . '    header,'
        . '    header_link,'
        . '    bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],'
        . '    rte_enabled;LLL:EXT:cms/locallang_ttc.xlf:rte_enabled_formlabel,'
        . '--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.images,'
        . '	 --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.image_settings;slickgallery,'
        . '	 image,'
;

/**
 * Prepare TCA for the slick carousel
 */
$TCA[ 'tt_content' ][ 'columns' ][ 'records' ][ 'config' ][ 'size' ] = 20;
$TCA[ 'tt_content' ][ 'types' ][ 'slickcarousel' ][ 'showitem' ] = $TCA[ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];

// #62474, 141026, dwildt, 9+
//// section_frames controls the default div-wrap: Set it to 62474 by default
//$TCA[ 'tt_content' ][ 'columns' ][ 'section_frame' ][ 'config' ][ 'default' ] = '62474';
//// remove all options for section_frames
//unset( $TCA[ 'tt_content' ][ 'columns' ][ 'section_frame' ][ 'config' ][ 'items' ] );
//// add the slickitem option
// #i0012, 150429, dwildt, 12+
$TCA[ 'tt_content' ][ 'columns' ][ 'section_frame' ][ 'config' ][ 'items' ][ 'slicknoframe' ] = array(
  '0' => 'slick: no frame',
  '1' => '62476'
);
$TCA[ 'tt_content' ][ 'columns' ][ 'section_frame' ][ 'config' ][ 'items' ][ 'slickbanner' ] = array(
  '0' => 'slick: banner',
  '1' => '62475'
);
$TCA[ 'tt_content' ][ 'columns' ][ 'section_frame' ][ 'config' ][ 'items' ][ 'slickgallery' ] = array(
  '0' => 'slick: gallery',
  '1' => '62474'
);

/**
 * Page tree icons
 */
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array( 'Slick', 'slick', t3lib_extMgm::extRelPath( $_EXTKEY ) . 'ext_icon.gif' );
t3lib_SpriteManager::addTcaTypeIcon( 'pages', 'contains-slick', '../typo3conf/ext/slick/ext_icon.gif' );
