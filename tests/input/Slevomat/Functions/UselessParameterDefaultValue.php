<?php

/**
 * @rule SlevomatCodingStandard.Functions.UselessParameterDefaultValue
 */

function foo(?int $a = null, int $aa): int
{
    return $a + $aa;
}
