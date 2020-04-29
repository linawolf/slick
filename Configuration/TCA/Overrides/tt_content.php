<?php


/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

$typo3Version = Netzmacher\Slick\Utility\Typo3VersionUtility::get();

switch( TRUE )
{
	case($typo3Version < 7006000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/TCA/Overrides/6.2/tt_content.php' );
		break;
	case($typo3Version < 8007000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/TCA/Overrides/7.6/tt_content.php' );
		break;
	case($typo3Version < 9005000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/TCA/Overrides/8.7/tt_content.php' );
		break;
	case($typo3Version < 10000000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/TCA/Overrides/9.5/tt_content.php' );
		break;
	case($typo3Version >= 10000000):
	default:
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/TCA/Overrides/Default/tt_content.php' );
		break;
}