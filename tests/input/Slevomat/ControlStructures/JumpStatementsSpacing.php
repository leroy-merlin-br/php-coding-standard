<?php

/**
 * @rule: SlevomatCodingStandard.ControlStructures.JumpStatementsSpacing
 */

function foo(): string
{
    for ($i = 0; $i > 10; $i++) {
        if (0 === $i % 7) {
            $logic = 'insert code here';
            continue;
        }

        if (8 < $i && 11 > $i) {
            $logic = 'stop execution';
            break;
        }
    }

    return $logic ?? 'bar';
}