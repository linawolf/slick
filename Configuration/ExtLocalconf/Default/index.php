<?php

use Netzmacher\Slick\Form\Element\SheetHelpPromptHelp;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry']['1588144983'] = [
    'nodeName' => 'sheetHelpPromptHelp',
    'priority' => 40,
    'class' => SheetHelpPromptHelp::class,
];

/**
 * Page TSConfig
 */
require(ExtensionManagementUtility::extPath('slick') . 'Configuration/ExtLocalconf/Default/TSconfig/index.php');
