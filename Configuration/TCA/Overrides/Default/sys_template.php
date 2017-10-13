<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
				$_EXTKEY
				, 'Configuration/TypoScript/Default'
				, 'Slick [1] (based on fluid_css_templates)'
);
ExtensionManagementUtility::addStaticFile(
				$_EXTKEY
				, 'Configuration/TypoScript/7.6'
				, 'Slick [1] - DEPRECATED (based on fluid_css_templates)'
);
