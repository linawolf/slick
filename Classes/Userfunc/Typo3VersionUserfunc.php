<?php

namespace Netzmacher\Slick\Userfunc;

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\GeneralUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2021-2022 -  Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
 * @version     6.1.6
 * @since       6.1.6
 */
class Typo3VersionUserfunc
{
    /**
     * get( ):
     *
     * @return  int
     * @version 6.1.6
     * @since 6.1.6
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

        return $TYPO3v;
    }

    /**
     * isGreaterThan087( ):
     *
     * @return  int
     * @version 6.1.6
     * @since 6.1.6
     */
    public static function isGreaterThan087(): int
    {
        $t3version = self::get();
        if ($t3version >= 8_007_000) {
            return 1;
        }
        return 0;
    }

    /**
     * isGreaterThan095( ):
     *
     * @return  int
     * @version 6.1.6
     * @since 6.1.6
     */
    public static function isGreaterThan095(): int
    {
        $t3version = self::get();
        if ($t3version >= 9_005_000) {
            return 1;
        }
        return 0;
    }

    /**
     * isGreaterThan104( ):
     *
     * @return  int
     * @version 6.1.6
     * @since 6.1.6
     */
    public static function isGreaterThan104(): int
    {
        $t3version = self::get();
        if ($t3version >= 10_004_000) {
            return 1;
        }
        return 0;
    }

    /**
     * isSmallerThan087( ):
     *
     * @return  int
     * @version 6.1.6
     * @since 6.1.6
     */
    public static function isSmallerThan087(): int
    {
        $t3version = self::get();
        if ($t3version < 8_007_000) {
            return 1;
        }
        return 0;
    }

    /**
     * isSmallerThan095( ):
     *
     * @return  int
     * @version 6.1.6
     * @since 6.1.6
     */
    public static function isSmallerThan095(): int
    {
        $t3version = self::get();
        if ($t3version < 9_005_000) {
            return 1;
        }
        return 0;
    }

    /**
     * isSmallerThan104( ):
     *
     * @return  int
     * @version 6.1.6
     * @since 6.1.6
     */
    public static function isSmallerThan100(): int
    {
        $t3version = self::get();
        if ($t3version < 10_000_000) {
            return 1;
        }
        return 0;
    }

    /**
     * isSmallerThan104( ):
     *
     * @return  int
     * @version 6.1.6
     * @since 6.1.6
     */
    public static function isSmallerThan104(): int
    {
        $t3version = self::get();
        if ($t3version < 10_004_000) {
            return 1;
        }
        return 0;
    }
}
