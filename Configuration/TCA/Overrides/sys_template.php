<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$tempPath = 'Configuration/TypoScript/';

ExtensionManagementUtility::addStaticFile('slick', $tempPath . 'Default/', 'Slick [01.1.1]');
