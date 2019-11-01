<?php


/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

$typo3Version = Netzmacher\Slick\Utility\Typo3VersionUtility::get();

switch( TRUE )
{
	case($typo3Version < 7006000):
	case($typo3Version < 8007000):
		//require( PATH_typo3conf . 'ext/slick/Configuration/TCA/Overrides/7.6/sys_template.php' );
		break;
	case($typo3Version < 9005000):
		require( PATH_typo3conf . 'ext/slick/Configuration/TCA/Overrides/8.7/sys_template.php' );
		break;
	case($typo3Version >= 9005000):
	default:
		require( PATH_typo3conf . 'ext/slick/Configuration/TCA/Overrides/Default/sys_template.php' );
		break;
}
