<?php

/**
 * @rule: SlevomatCodingStandard.Classes.RequireMultiLineMethodSignature
 */

class Foo {
    public function bar(int $value, int $multiplier, float $sin, float $cossin, bool $calculate = true, array $options = []): void
    {
    }
}