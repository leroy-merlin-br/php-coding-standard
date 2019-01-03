<?php

$string = 'Leroy Merlin'.'bar';

$foo = 'Leroy Merlin';
$bar    = 'bar';
$string   = $foo.$bar;

$string = 'Leroy Merlin'.$bar;

$string = $foo.'bar';

$string = $foo.$bar.'even'.'more'.$string;

$string .= $foo;
$string .= $foo;
$string .= $foo;

$string = $foo.
    $bar.
    'all'
    .$string;
