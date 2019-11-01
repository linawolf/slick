<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

$typo3Version = Netzmacher\Slick\Utility\Typo3VersionUtility::get();

switch( TRUE )
{
	case($typo3Version < 7006000):
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/6.2/index.php' );
		break;
	case($typo3Version < 8007000):
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/7.6/index.php' );
		break;
	case($typo3Version >= 8007000):
	default:
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/Default/index.php' );
		break;
}
