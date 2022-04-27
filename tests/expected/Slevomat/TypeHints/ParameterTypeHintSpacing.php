<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.ParameterTypeHintSpacing
 */

$a = function (?bool $a, ?string &$b, ?int ...$c): void {
};

function b(
    ?bool $a,
    array $b,
    $c
): void {
}

fn (?bool $a, ?string &$b, ?int ...$c) => $a;

fn (int|false $a, null|string $b) => $a;
