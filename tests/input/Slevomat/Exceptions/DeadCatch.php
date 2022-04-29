<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.DeadCatch
 */

try {
    // code

    $logic = 'code';
} catch (Throwable $e) {
    // throwable handling
} catch (Exception $e) {
    // unreachable catch
}
