<?php

$EM_CONF[ $_EXTKEY ] = array(
  'title' => 'Slick Slider for TYPO3',
  'description' => 'Manage content elements, file collections and images with this responsive slider! Based on the slick carousel slider by Ken Wheeler. Scales with its container. Separate settings per breakpoint. Swipe, desktop mouse dragging, infinite looping, randomized order among others. Users can setup more than 50 properties by the plugin.',
  'category' => 'plugin',
  'author' => 'Dirk Wildt (Die Netzmacher)',
  'author_email' => 'http://wildt.at.die-netzmacher.de/',
  'state' => 'stable',
  'internal' => '',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearcacheonload' => 0,
  'version' => '5.1.0',
  'constraints' => array(
    'depends' => array(
      'typo3' => '6.0.0-9.9.99',
    ),
    'conflicts' => array(
    ),
    'suggests' => array(
      'image_crop' => '',
    ),
  ),
);