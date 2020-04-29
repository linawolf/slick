<?php


/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

$typo3Version = Netzmacher\Slick\Utility\Typo3VersionUtility::get();

switch( TRUE )
{
	case($typo3Version < 7006000):
		break;
	case($typo3Version < 8007000):
		break;
	case($typo3Version < 9005000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/TCA/Overrides/8.7/pages.php' );
		break;
	case($typo3Version < 100000000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/TCA/Overrides/9.5/pages.php' );
		break;
	case($typo3Version >= 10000000):
	default:
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/TCA/Overrides/Default/pages.php' );
		break;
}