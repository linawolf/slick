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
		require( PATH_typo3conf . 'ext/slick/Configuration/TCA/Overrides/8.7/pages.php' );
		break;
	case($typo3Version >= 9005000):
	default:
		require( PATH_typo3conf . 'ext/slick/Configuration/TCA/Overrides/Default/pages.php' );
		break;
}