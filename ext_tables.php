<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

$typo3Version = Netzmacher\Slick\Utility\Typo3VersionUtility::get();

switch( TRUE )
{
	case($typo3Version < 8007000):
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/7.6/index.php' );
		break;
	case($typo3Version < 9005000):
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/8.7/index.php' );
		break;
	case($typo3Version >= 9005000):
	default:
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/Default/index.php' );
		break;
}


