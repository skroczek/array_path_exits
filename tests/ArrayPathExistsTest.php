<?php
/*
 * This file is part of the array_path_exits package.
 *
 * (c) Sebastian Kroczek <sk@xbug.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;

class ArrayPathExistsTest extends TestCase
{

    public function testPathExistsEmptyArrayValue()
    {
        $array = [
            'foo' => [
                'bar' => [
                    'baz' => []
                ],
            ]
        ];

        $this->assertTrue(array_path_exists($array, 'foo', 'bar', 'baz'));
    }

    public function testPathExistsNullValue()
    {
        $array = [
            'foo' => [
                'bar' => [
                    'baz' => null
                ],
            ]
        ];

        $this->assertTrue(array_path_exists($array, 'foo', 'bar', 'baz'));
    }


    public function testPathNotExists()
    {
        $array = [
            'foo' => [
                'bar' => [
                    'baz' => null
                ],
            ]
        ];

        $this->assertFalse(array_path_exists($array, 'foo', 'bar', 'baz1'));
    }

    public function testPathNotExists2()
    {
        $array = [
            'foo' => [
                'bar' => [
                    'baz' => null
                ],
            ]
        ];

        $this->assertFalse(array_path_exists($array, 'foo1', 'bar', 'baz'));
    }

    public function testPathNotExistsNotArray()
    {
        $array = [
            'foo' => [
                'bar' => null,
            ]
        ];

        $this->assertFalse(array_path_exists($array, 'foo', 'bar', 'baz'));
    }

    public function testPathNotExistsEmptyArray()
    {
        $array = [
            'foo' => [
                'bar' => [],
            ]
        ];

        $this->assertFalse(array_path_exists($array, 'foo', 'bar', 'baz'));
    }


    public function testPathExistsIndices()
    {
        $array = [[[[], []]]
        ];

        $this->assertTrue(array_path_exists($array, 0, 0, 1));
    }

    public function testPathNotExistsIndices()
    {
        $array = [[[[], []]]
        ];

        $this->assertFalse(array_path_exists($array, 0, 0, 2));
    }

    public function testPathNotExistsIndices2()
    {
        $array = [[[[], []]]
        ];

        $this->assertFalse(array_path_exists($array, 1, 0, 2));
    }

    public function testPathExistsMixed()
    {
        $array = [[[[], ['baz' => null]]]
        ];

        $this->assertTrue(array_path_exists($array, 0, 0, 1, 'baz'));
    }

    public function testPathNotExistsMixed()
    {
        $array = [[[[], ['baz' => null]]]
        ];

        $this->assertFalse(array_path_exists($array, 0, 0, 1, 'baz1'));
    }
}
