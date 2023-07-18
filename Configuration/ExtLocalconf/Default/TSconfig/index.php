<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

$pathToTsConfig = 'FILE:EXT:slick/Configuration/ExtLocalconf/Default/TSconfig/';

/* * ****************************************************************************
 * mod.wizards.newContentElement.wizardItems
 * **************************************************************************** */

$addPageTsConfig = '<INCLUDE_TYPOSCRIPT: source="' . $pathToTsConfig . 'mod.wizards.newContentElement.wizardItems.slick.ts">';
ExtensionManagementUtility::addPageTSConfig($addPageTsConfig);
