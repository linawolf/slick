<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'CType' ][ 'config' ][ 'itemGroups' ][ 'slick' ] = 'Slick Slider';

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Slick Slider'
        , '--div--'
        , 'slick',
    ]
);
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.header'
        , 'slickcontent'
        , 'contains-slickdefault'
        , 'slick',
    ]
);
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.filecollection.header'
        , 'slickfilecollection'
        , 'contains-slickdefault'
        , 'slick',
    ]
);
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.header'
        , 'slickimage'
        , 'contains-slickdefault'
        , 'slick',
    ]
);
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header'
        , 'slickitem'
        , 'contains-slickdefault'
        , 'slick',
    ]
);
