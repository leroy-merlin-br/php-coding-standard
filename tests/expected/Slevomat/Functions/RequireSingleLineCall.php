<?php

/**
 * @rule: SlevomatCodingStandard.Functions.RequireSingleLineCall
 */

function foo(int $number, string $message, bool $acceptable): void
{
}

foo(1222, 'text', true);
