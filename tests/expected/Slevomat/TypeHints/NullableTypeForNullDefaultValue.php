<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue
 */

use Foo\Bar\Baz;

function foo(?DateTimeImmutable &$dateTime = null): void
{
}

$callback = function (?string $string = null): void {
};

fn (?int $int = null) => $int;

interface Foo
{
    public function doFoo(?int $int = null): void;
}

class FooBar extends Anything
{
    public function invalid(?bool $bool = null): void
    {
    }

    public function myself(?self $self = null): void
    {
    }

    public function array(?array $array = null): void
    {
    }

    public function parent(?parent $parent = null): void
    {
    }

    public function callable(?callable $callable = null): void
    {
    }

    public function withNullableParamBefore(?float $float, ?Baz $param1 = null): void
    {
    }

    public function withParamAfter(?bool $param2 = null, ?array &...$ellipsis): void
    {
    }

    public function reference(?float &$ref = null): void
    {
    }

    public function weirdDefinition(?float &$ref = null): void
    {
    }
}
