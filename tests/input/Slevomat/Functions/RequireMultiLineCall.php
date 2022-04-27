<?php

/**
 * @rule: SlevomatCodingStandard.Functions.RequireMultiLineCall
 */

function foo(int $number, string $message, bool $acceptable): void
{

}

foo(122_232_233_333_333_000, 'very loooooooooooooooooooooooooooooooong text message to be sent for the user', true);
