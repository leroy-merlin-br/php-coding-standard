<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.ReferenceThrowableOnly
 */

try {
    // code

    $logic = 'code';
} catch (Exception $e) {
    // handle exception
}
