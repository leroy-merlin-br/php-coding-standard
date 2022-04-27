<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.ReturnTypeHint
 */

abstract class Whatever
{

    private function noTypeHintNoAnnotation()
    {
        return true;
    }

    /**
     * @return int[]
     */
    public function arrayTypeHint()
    {
        return [];
    }

    /**
     * @return int[]|null
     */
    public function arrayTypeHintWithNull()
    {
        return [];
    }

    /**
     * @return array{foo: int}
     */
    public function arrayShapeTypeHint()
    {
        return [];
    }

    /**
     * @return string|null
     */
    public function twoTypeWithNull()
    {
        return null;
    }

    /**
     * @return int[]|\Traversable
     */
    public function specificTraversable()
    {
        return new \Exception();
    }

    /**
     * @return string
     */
    public function &reference($text)
    {
        return $text;
    }

    /**
     * @return string
     */
    public function uselessAnnotation(): string
    {
        return 'string';
    }

    public function missingAnnotationForTraversable(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function missingItemsSpecification(): array
    {
        return [];
    }

    public function returnsVoid()
    {

    }

    /**
     * @return void
     */
    abstract public function returnsVoidWithAnnotation();

    public function closure(): \Closure
    {
        return function () {
        };
    }

    /**
     * @return callable(): void
     */
    public function returnsCallable()
    {

    }

    /**
     * @return \Traversable
     */
    public function onlyTraversable()
    {

    }

    /**
     * @return array{array}
     */
    public function arrayShapeWithoutItemsSpecification(): array
    {
        return [];
    }

    /**
     * @return \Generic<array>
     */
    public function genericWithoutItemsSpecification(): \Generic
    {
        return new \Generic;
    }

    /**
     * @return array[]&\Traversable
     */
    public function traversableIntersection()
    {
        return new \ArrayIterator();
    }

    /**
     * @return \Traversable&array[]
     */
    public function traversableIntersectionDifferentOrder()
    {
        return new \ArrayIterator();
    }

    /**
     * @return null|\Traversable
     */
    public function traversableNull()
    {
        return new \ArrayIterator();
    }

    /**
     * @return object
     */
    public function returnsObject()
    {
        return new \stdClass();
    }

    /**
     * @return ?int
     */
    public function nullable()
    {
    }

    /**
     * @return mixed[]|array
     */
    public function traversableArray()
    {
    }

    /** @return string */
    public function oneLineDocComment(): string
    {
        return 'hi';
    }

    /** @return true */
    public function constTrue()
    {
    }

    /** @return FALSE */
    public function constFalse()
    {
    }

    /** @return 0 */
    public function constInteger()
    {
    }

    /** @return 0.0 */
    public function constFloat()
    {
    }

    /** @return 'foo' */
    public function constString()
    {
    }

    /** @return 'foo'|null */
    public function constNullableString()
    {
    }

    /** @return 'foo'|'bar' */
    public function constUnionString()
    {
    }

    /** @return class-string */
    public function classString()
    {
    }

    /** @return static */
    public function staticReference()
    {
    }

    /** @return mixed */
    public function returnsMixed()
    {
    }

    /** @return mixed|null */
    public function returnsNullableMixed()
    {
    }

    /**
     * @return void
     */
    public function voidButReturnsValue()
    {
        return true;
    }

    /**
     * @return no-return
     */
    public function noReturnTypeHint()
    {
    }

    /**
     * @return ?int
     */
    public function uselessAnnotationWithShortNullable(): ?int
    {
        return 0;
    }

    /**
     * @return (Conditional is Conditional2 ? array : iterable)
     */
    public function withConditional(): array
    {
        return [];
    }
}
