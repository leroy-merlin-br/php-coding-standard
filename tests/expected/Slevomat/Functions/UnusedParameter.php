<?php

/**
 * @rule: SlevomatCodingStandard.Functions.UnusedParameter
 */

function foo(int $number, string $text, float $multiplier): float
{
    return $number * $multiplier;
}
