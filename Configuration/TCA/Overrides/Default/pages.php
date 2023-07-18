<?php

use Netzmacher\Slick\TCA\Ctrl\Icons;

/* * ****************************************************************************
 * Pagetree Icons
 * **************************************************************************** */

// #i0064, 191101, dwildt

$icons = Icons::GetIcons();

foreach ((array)$icons as $icon) {
    $GLOBALS[ 'TCA' ][ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = [$icon[ 'label' ], $icon[ 'key' ], $icon[ 'identifier' ]];
    $GLOBALS[ 'TCA' ][ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $icon[ 'identifier' ] ] = $icon[ 'identifier' ];
}
