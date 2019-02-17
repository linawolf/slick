<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/Default/'
				, 'Slick [01.1.1] (based on fluid_css_templates)'
);
ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/ImageWoFigure/'
				, 'Slick [01.2.1] +Image without figure'
);
ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/Dev/'
				, 'Slick [99.1.1] +Dev: static JavaScript'
);
ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/7.6/'
				, 'Slick [XX] - DEPRECATED (based on css_styled_contents)'
);

