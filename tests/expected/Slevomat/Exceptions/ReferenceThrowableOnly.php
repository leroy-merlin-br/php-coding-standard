<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.ReferenceThrowableOnly
 */

try {
    // code

    $logic = 'code';
} catch (Throwable $e) {
    // handle exception
}
