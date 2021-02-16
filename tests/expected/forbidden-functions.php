<?php

namespace Test;

use function chop;
use function settype;
use function sizeof;
use function var_dump;

echo chop('abc ');
echo sizeof([1, 2, 3]);

$foo = '1';
settype($foo, 'int');
var_dump($foo);

$bar = [
    'foo' => 1,
    'bar' => 2,
    'baz' => 3,
];
