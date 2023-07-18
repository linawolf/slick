<?php

namespace Netzmacher\Slick\Utility;

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\GeneralUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2019-2022 -  Dirk Wildt <http://wildt.at.die-netzmacher.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * @author  Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @version     4.5.2
 * @since       4.5.2
 */
class Typo3VersionUtility
{
    /**
     * get( ):
     *
     * @return  int
     * @version 4.5.2
     * @since 4.5.2
     */
    public static function get()
    {
        static $TYPO3v = null;

        if ($TYPO3v !== null) {
            return $TYPO3v;
        }

        [$main, $sub, $bugfix] = explode('.', GeneralUtility::makeInstance(Typo3Version::class)->getVersion());
        $version = ((int)$main) * 1_000_000;
        $version = $version + ((int)$sub) * 1000;
        $version = $version + ((int)$bugfix) * 1;
        $TYPO3v = $version;

        if ($TYPO3v >= 6_000_000) {
            return $TYPO3v;
        }

        $prompt = '<h1>ERROR</h1>
        <h2>Unproper TYPO3 version</h2>
        <ul>
          <li>
            TYPO3 version is smaller than 6.0.0
          </li>
          <li>
            constant TYPO3_version: ' . GeneralUtility::makeInstance(Typo3Version::class)->getVersion() . '
          </li>
          <li>
            integer $TYPO3v: ' . (int)$TYPO3v . '
          </li>
          <li>
            ' . __METHOD__ . ' (#' . __LINE__ . ')
          </li>
        </ul>
          ';
        die($prompt);
    }
}
