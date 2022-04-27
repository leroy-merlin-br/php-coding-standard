<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.DisallowMixedTypeHint
 */

/**
 * @property mixed[] $property
 */
class Whatever
{
    /**
     * @var (bool|mixed|null)[]
     */
    public array $a;

    /**
     * @var int&bool<bool, mixed>
     */
    public $b;

    /**
     * @var mixed&(int|float)
     */
    public $c;

    /**
     * @var mixed|(float&int)
     */
    public $d;

    /**
     * @var mixed[][][]
     */
    public array $e;

    /**
     * @var (int|mixed)[][][]
     */
    public array $f;

    /**
     * @var mixed|(\Foo<mixed>&bool)[]
     */
    public $g;

    /**
     * @var \Foo<\Boo<mixed>>
     */
    public Foo $h;
}

class CallableType
{
    /**
     * @return callable(mixed $bool): mixed
     */
    public function returnsCallable(): callable
    {
    }
}

/** @var array{int, mixed} $arrayShape1 */
$arrayShape1 = [];

/** @var array{foo: mixed} $arrayShape2 */
$arrayShape2 = [];
