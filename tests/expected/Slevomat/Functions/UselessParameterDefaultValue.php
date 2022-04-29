<?php

/**
 * @rule SlevomatCodingStandard.Functions.UselessParameterDefaultValue
 */

function foo(?int $a, int $aa): int
{
    return $a + $aa;
}
