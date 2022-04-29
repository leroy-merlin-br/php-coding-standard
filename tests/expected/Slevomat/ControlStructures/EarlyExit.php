<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.EarlyExit
 */

function foo(): int
{
    return 1 > 0 ? 10 : 20;
}

function bar(): int
{
    if (1 > 0) {
        return 10;
    }

    if (10 < 20) {
        return 20;
    }

    if (20 > 0) {
        return 30;
    }

    return 40;
}
