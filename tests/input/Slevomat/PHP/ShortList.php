<?php

/**
 * @rule: SlevomatCodingStandard.PHP.ShortList
 */

list($a) = foo();
list($a, $b) = foo();
list(
    list($a, $b),
    $c,
    ) = foo();
