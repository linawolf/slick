<?php

//use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$cmsLL = 'frontend/Resources/Private/Language/locallang_ttc.xlf';

/**
 * tt_content.records: modify size
 */
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'records' ][ 'config' ][ 'size' ] = 10;

/**
 * tt_content.frame_class: additional items
 */
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'frame_class' ][ 'config' ][ 'items' ][ 'slicknoframe' ] = array(
//  '0' => 'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tt_content.frame_class.slicknoframe',
//  '1' => '62476'
//);
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'frame_class' ][ 'config' ][ 'items' ][ 'slickbanner' ] = array(
//  '0' => 'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tt_content.frame_class.slickbanner',
//  '1' => '62475'
//);
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'frame_class' ][ 'config' ][ 'items' ][ 'slickgallery' ] = array(
//  '0' => 'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tt_content.frame_class.slickgallery',
//  '1' => '62474'
//);


/**
 * tt_content: additional palettes
 */
//ExtensionManagementUtility::addFieldsToPalette(
//        'tt_content'
//        , 'slickgallery'
//        , ''
//        . 'imagewidth;LLL:EXT:' . $cmsLL . ':imagewidth_formlabel,'
//        . 'imageheight;LLL:EXT:' . $cmsLL . ':imageheight_formlabel,'
//        . 'tx_imagecrop_crop,tx_imagecrop_gravity,'
//        . 'frame_class;LLL:EXT:' . $cmsLL . ':frame_class_formlabel,'
//        , ''
//);

/**
 * tt_content: additional types
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];
// #i0018, 17-03-02, dwildt, 2+
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel2' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel3' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];

// #i0022
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];
// #i0018, 17-03-02, dwildt, 2+
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery2' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery3' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];


$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickitem' ][ 'showitem' ] = ''
        . '  --palette--;LLL:EXT:' . $cmsLL . ':palette.general;general,'
        . '    hidden,'
        . '    header,'
        . '    header_link,'
        . '    bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],'
        . '    rte_enabled;LLL:EXT:' . $cmsLL . ':rte_enabled_formlabel,'
        . '--div--;LLL:EXT:' . $cmsLL . ':tabs.images,'
        . '	 --palette--;LLL:EXT:' . $cmsLL . ':palette.image_settings;slickgallery,'
        . '	 image,'
;