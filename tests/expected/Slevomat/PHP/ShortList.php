<?php

/**
 * @rule: SlevomatCodingStandard.PHP.ShortList
 */

[$a] = foo();
[$a, $b] = foo();
[
    [$a, $b],
    $c,
] = foo();
