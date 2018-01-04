array_path_exits
================

[![Build Status](https://travis-ci.org/skroczek/array_path_exits.svg?branch=master)](https://travis-ci.org/skroczek/array_path_exits)
[![Coverage Status](https://coveralls.io/repos/github/skroczek/array_path_exits/badge.svg?branch=master)](https://coveralls.io/github/skroczek/array_path_exits?branch=master)

Just like the php array_key_exists function but with the possibility to give multiple keys (path).

Installation
------------

### Download the Library

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require sk/array_path_exists "dev-master"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Usage
-----

After installing the library the function is autoloaded by the composer autoloader.

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

$array = [
    'foo' => [
        'bar' => [
            'baz' => null
        ],
    ]
];

var_dump(array_path_exists($array, 'foo', 'bar', 'baz'));
// Print `true`
```
For more examples see test file under tests/ArrayPathExistsTest.php


Running Tests
-------------

The test suite is executed by running phpunit

```
vendor/bin/phpunit --bootstrap tests/bootstrap.php tests/
```

Issues and feature requests
===========================

Issues and feature requests are handled on github. If you found a bug, you are always welcome to open an issue. And also feel
free to create a pull request with a fix. Same for feature requests.

License
=======

This library is under the MIT license. See the complete license in the library LICENSE file.
