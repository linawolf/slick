<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$typo3Version = ( ( int ) $main ) * 1000000;
$typo3Version = $typo3Version + ( ( int ) $sub ) * 1000;
$typo3Version = $typo3Version + ( ( int ) $bugfix ) * 1;

switch( TRUE )
{
	case($typo3Version < 7006000):
//		require( PATH_typo3conf . 'ext/slick/Configuration/ExtLocalconf/6.2/index.php' );
		break;
	case($typo3Version < 8007000):
	case($typo3Version >= 8007000):
	default:
		require( PATH_typo3conf . 'ext/slick/Configuration/ExtLocalconf/Default/index.php' );
		break;
}