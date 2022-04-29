<?php

/**
 * rule: SlevomatCodingStandard.TypeHints.NullTypeHintOnLastPosition
 */

class Whatever
{
    private ?bool $multiLineAnnotation = null;

    private ?bool $singleLineAnnotation = null;

    public function paramAnnotation(?string $param): void
    {
        /** @var float|int|null $number */
        $inlineAnnotation = 0.0;

        /** @var float|int|null $invalidAnnotation */
        $inlineAnnotationInSecondFormat = 0.0;
    }

    public function returnAnnotation(): ?string
    {
    }

    /**
     * @return string|NULL
     */
    public function uppercasedNull(): ?string
    {
    }

    /**
     * @return float|int|int[]|null
     */
    public function nullInTheMiddle()
    {
    }
}

/**
 * @property bool|null $property
 * @property-read int|null $propertyRead
 * @property-write int|null $propertyWrite
 * @method bool|null method(int $m, bool ...$m2)
 * @method bool[]|array|null method2(bool $m)
 * @method method3(?\Foo $m)
 */
class Boo
{
}

class IntersectionAndGeneric
{
    /**
     * @var (bool|int|null)[]
     */
    public array $a;

    /**
     * @var string&(int|float|null)
     */
    public $b;

    /**
     * @var (int|bool|null)[][][]
     */
    public array $c;

    /**
     * @var int|(string<foo>&bool)[]|null
     */
    public $d;

    /**
     * @var \Foo<(int|null), (bool|null)>
     */
    public Foo $e;

    /**
     * @var \Foo<\Foo<(int|null)>>
     */
    public Foo $f;
}

class CallableType
{
    /**
     * @return callable((bool|null) $bool): (int|null)
     */
    public function returnsCallable(): callable
    {
    }
}

/** @var array{int, (int|null), (bool|null)} $arrayShape1 */
$arrayShape1 = [];

/** @var array{foo: (int|null)} $arrayShape2 */
$arrayShape2 = [];

class Conditional
{
    /**
     * @return (Conditional1 is Conditional2 ? (Conditional3|null) : false)
     */
    public function withConditional()
    {
    }

    /**
     * @return ($parameter is Conditional2 ? (Conditional3|null) : false)
     */
    public function withConditionalParameter($parameter)
    {
    }
}
