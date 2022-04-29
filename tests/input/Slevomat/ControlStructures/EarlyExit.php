<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.EarlyExit
 */

function foo(): int
{
    if (1 > 0) {
        return 10;
    } else {
        return 20;
    }
}

function bar(): int
{
    if (1 > 0) {
        return 10;
    } elseif (10 < 20) {
        return 20;
    } elseif (20 > 0) {
        return 30;
    } else {
        return 40;
    }
}
