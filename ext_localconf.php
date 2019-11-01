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