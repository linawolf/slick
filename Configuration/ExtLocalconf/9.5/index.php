<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}


# #i0064, 191101, dwildt

/**
 * Page TSConfig
 */
require( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( 'slick' ) . 'Configuration/ExtLocalconf/9.5/TSconfig/index.php' );
