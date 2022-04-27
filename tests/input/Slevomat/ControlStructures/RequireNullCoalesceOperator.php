<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.RequireNullCoalesceOperator
 */

$b = isset($bb) ? $bb : 'bb';

$c = isset($cc['c']) ? $cc['c'] : 'c';

$d = $e !== null ? $e : 'e';
$dd = null !== $ee ? $ee : 'ee';
