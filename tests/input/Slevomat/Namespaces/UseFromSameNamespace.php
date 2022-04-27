<?php

/**
 * @rule: SlevomatCodingStandard.Namespaces.UseFromSameNamespace
 */

namespace Lorem\Ipsum;

use Lorem\Ipsum\Consecteur as LoremConsecteur;
use Lorem\Ipsum\Dolor;
use Lorem\Ipsum\Dolor\Sit;

$f = function () use ($a, $b) {
    $a = Dolor::class;
    $b = Sit::class;
    $c = LoremConsecteur::class;

    return $a . $b . $c;
};

