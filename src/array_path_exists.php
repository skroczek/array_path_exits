<?php
/*
 * This file is part of the array_path_exits package.
 *
 * (c) Sebastian Kroczek <sk@xbug.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Returns TRUE if the given path is set in the array. Single key elements can contain any value possible for an array index.
 *
 * @param array $array
 * @param array ...$path
 *
 * @return bool
 */
function array_path_exists(array $array, ...$path)
{
    $key = array_shift($path);
    if (array_key_exists($key, $array)) {
        if (count($path) > 0) {
            if (is_array($array[$key])) {
                return array_path_exists($array[$key], ...$path);
            }
            return false;
        }

        return true;
    }

    return false;
}


