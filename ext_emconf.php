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
  'version' => '10.0.3',
  'constraints' => array(
    'depends' => array(
      'typo3' => '10.4.0-11.5.99',
    ),
    'conflicts' => array(
    ),
    'suggests' => array(
      'image_crop' => '',
    ),
  ),
);