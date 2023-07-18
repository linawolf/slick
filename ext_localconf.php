<?php

use Netzmacher\Slick\TCA\Ctrl\Icons;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

/* * ****************************************************************************
 * Register Icons
 * **************************************************************************** */

Icons::RegisterIcons();

/* * ****************************************************************************
 * ...
 * **************************************************************************** */

require(ExtensionManagementUtility::extPath('slick') . 'Configuration/ExtLocalconf/Default/index.php');
