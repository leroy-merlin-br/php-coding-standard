<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.ParameterTypeHintSpacing
 */

$a = function (? bool$a, ?   string   &$b, ?   int    ...$c)
{

};

function b(
    ?bool $a,
    array $b,
          $c
) {

}

fn (? bool$a, ?   string   &$b, ?   int    ...$c) => $a;

fn (int|false  $a, null|string $b) => $a;
