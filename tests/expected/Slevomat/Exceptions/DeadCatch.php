<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.DeadCatch
 */

try {
    // code

    $logic = 'code';
} catch (Throwable $e) {
    // throwable handling
} catch (Throwable $e) {
    // unreachable catch
}
