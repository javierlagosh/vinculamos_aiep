<?php

/*
 * This file is part of Psy Shell.
 *
<<<<<<< HEAD
 * (c) 2012-2022 Justin Hileman
=======
 * (c) 2012-2023 Justin Hileman
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Util;

/**
 * A static class to wrap JSON encoding/decoding with PsySH's default options.
 */
class Json
{
    /**
     * Encode a value as JSON.
     *
     * @param mixed $val
     * @param int   $opt
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
     */
    public static function encode($val, int $opt = 0): string
    {
        $opt |= \JSON_UNESCAPED_SLASHES | \JSON_UNESCAPED_UNICODE;

        return \json_encode($val, $opt);
    }
}
