<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'Slick Slider',
		'--div--'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.header'
		, 'slickcontent'
		, 'contains-slick-default'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.filecollection.header'
		, 'slickfilecollection'
		, 'contains-slick-default'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.header'
		, 'slickimage'
		, 'contains-slick-default'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header'
		, 'slickitem'
		, 'contains-slick-default'
				]
);