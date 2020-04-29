<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}


/* * ****************************************************************************
 * Register Icons
 * **************************************************************************** */

\Netzmacher\Slick\TCA\Ctrl\Icons::RegisterIcons();

/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

$typo3Version = Netzmacher\Slick\Utility\Typo3VersionUtility::get();

switch( TRUE )
{
	case($typo3Version < 7006000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/ExtLocalconf/6.2/index.php' );
		break;
	case($typo3Version < 8007000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/ExtLocalconf/7.6/index.php' );
		break;
	case($typo3Version < 10000000):
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/ExtLocalconf/9.5/index.php' );
		break;
	case($typo3Version >= 10000000):
	default:
		require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/ExtLocalconf/Default/index.php' );
		break;
}