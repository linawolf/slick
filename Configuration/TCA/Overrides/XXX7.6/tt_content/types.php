<?php

/**
 * slickcontent
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcontent' ][ 'showitem' ] = ''
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '  rowDescription,'
				. '  records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,'
				. '  recursive,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.slider,'
				. '  pi_flexform;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.pi_flexform,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,'
				. '  --palette--;LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_visibility;tx_cbfoundation_visibility,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,'
				. '--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,'
				. '  categories'
;

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ ',slickcontent' ] = 'FILE:EXT:slick/Configuration/FlexForms/7.6/Slickcontent/flexform.xml';

/**
 * slickimage
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickimage' ][ 'showitem' ] = ''
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/7.6/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '  rowDescription,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,'
				. '  image,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.image_settings;image_settings,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imageblock;imageblock,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.slider,'
				. '  pi_flexform;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.pi_flexform,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,'
				. '  --palette--;LLL:EXT:cb_foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_cbfoundation_visibility;tx_cbfoundation_visibility,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,'
				. '--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,'
				. '  categories'
;

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ ',slickimage' ] = 'FILE:EXT:slick/Configuration/FlexForms/7.6/Slickcontent/flexform.xml';

/**
 * slickitem
 */
$cmsLL = 'frontend/Resources/Private/Language/locallang_ttc.xlf';
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

/**
 * DEPRECATED
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel2' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel3' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];

// #i0022
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];
// #i0018, 17-03-02, dwildt, 2+
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery2' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery3' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];

