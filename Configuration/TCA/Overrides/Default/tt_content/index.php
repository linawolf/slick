<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

require(ExtensionManagementUtility::extPath('slick') . 'Configuration/TCA/Overrides/Default/tt_content/addTcaSelectItem.php');
require(ExtensionManagementUtility::extPath('slick') . 'Configuration/TCA/Overrides/Default/tt_content/columns.php');
require(ExtensionManagementUtility::extPath('slick') . 'Configuration/TCA/Overrides/Default/tt_content/types.php');
