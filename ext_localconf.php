<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}


/* * ****************************************************************************
 * Register Icons
 * **************************************************************************** */

// https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/Icon/Index.html

\Netzmacher\Slick\TCA\Ctrl\Icons::RegisterIcons();

/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

$typo3Version = Netzmacher\Slick\Utility\Typo3VersionUtility::get();

switch( TRUE )
{
	case($typo3Version < 7006000):
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtLocalconf/6.2/index.php' );
		break;
	case($typo3Version < 8007000):
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtLocalconf/7.6/index.php' );
		break;
	case($typo3Version >= 8007000):
	default:
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtLocalconf/Default/index.php' );
		break;
}