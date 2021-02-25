<?php

$foo = $_GET['foo'] ?? 'foo';

$bar = $bar ?? 'bar';

$bar = $bar['baz'] ?? 'baz';

$bar = $foo ?? 'foo';

$fooBar = isset($foo, $bar) ? 'foo' : 'bar';

$baz = !isset($foo) ? 'foo' : 'baz';
