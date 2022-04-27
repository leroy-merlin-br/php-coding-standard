<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.LongTypeHints
 */

function doSomething(int $a): bool
{
    return true;
}

class Foo
{
    /**
     * Array
     * @var int[]|bool[]|null
     */
    public ?array $array = null;

    private ?int $integer = 0;

    /**
     * Boolean
     * With
     * Long
     * Destription
     *
     */
    private bool $boolean = true;

    /**
     * @param bool|null    $a
     * @param null|boolean
     * @param int|bool     $c
     */
    public function doSomething(?Boolean $a, $b, $c): ?int
    {
        return 0;
    }

    public function inlineDocComment($values): void
    {
        /** @var bool|int|string $value */
        foreach ($values as $value) {
        }
    }
}

/**
 * @property bool $property
 * @property-read int $propertyRead
 * @property-write int[] $propertyWrite
 * @method bool method(int $m, bool ...$m2)
 * @method method2(?int $m = null, ?bool $m2, $m3)
 * @method bool[]|array method3(?bool $m)
 */
class Boo
{
}

/**
 * @property int&bool $property
 */
class IntersectionAndGeneric
{
    /**
     * @var (bool|int|null)[]
     */
    public array $a;

    /**
     * @var int&bool<bool, int>
     */
    public $b;

    /**
     * @var string&(int|float)
     */
    public $c;

    /**
     * @var string|(float&int)
     */
    public $d;

    /**
     * @var bool[][][]
     */
    public array $e;

    /**
     * @var (int|bool)[][][]
     */
    public array $f;

    /**
     * @var int|(string<foo>&bool)[]
     */
    public $g;

    /**
     * @var \Foo<\Boo<int, bool>>
     */
    public Foo $h;
}

class CallableType
{
    /**
     * @return callable(bool $bool): (int|float)
     */
    public function returnsCallable(): callable
    {
    }
}

/**
 * @return bool - true - if some cond
 * false - if some other cond
 */
function multilineDescription(): bool
{
}

/** @var array{int, bool} $arrayShape1 */
$arrayShape1 = [];

/** @var array{foo: int, bar: bool} $arrayShape2 */
$arrayShape2 = [];
