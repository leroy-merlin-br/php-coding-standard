<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.ReturnTypeHint
 */

abstract class Whatever
{
    abstract public function returnsVoidWithAnnotation(): void;

    /**
     * @return int[]
     */
    public function arrayTypeHint(): array
    {
        return [];
    }

    /**
     * @return int[]|null
     */
    public function arrayTypeHintWithNull(): ?array
    {
        return [];
    }

    /**
     * @return array{foo: int}
     */
    public function arrayShapeTypeHint(): array
    {
        return [];
    }

    public function twoTypeWithNull(): ?string
    {
        return null;
    }

    /**
     * @return int[]|\Traversable
     */
    public function specificTraversable()
    {
        return new Exception();
    }

    public function &reference($text): string
    {
        return $text;
    }

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

    public function returnsVoid(): void
    {
    }

    public function closure(): Closure
    {
        return function (): void {
        };
    }

    /**
     * @return callable(): void
     */
    public function returnsCallable(): callable
    {
    }

    public function onlyTraversable(): Traversable
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
    public function genericWithoutItemsSpecification(): Generic
    {
        return new Generic();
    }

    /**
     * @return array[]&\Traversable
     */
    public function traversableIntersection()
    {
        return new ArrayIterator();
    }

    /**
     * @return \Traversable&array[]
     */
    public function traversableIntersectionDifferentOrder()
    {
        return new ArrayIterator();
    }

    public function traversableNull(): ?Traversable
    {
        return new ArrayIterator();
    }

    public function returnsObject(): object
    {
        return new stdClass();
    }

    public function nullable(): ?int
    {
    }

    /**
     * @return mixed[]|array
     */
    public function traversableArray(): array
    {
    }

    public function oneLineDocComment(): string
    {
        return 'hi';
    }

    /** @return true */
    public function constTrue(): bool
    {
    }

    /** @return FALSE */
    public function constFalse(): bool
    {
    }

    /** @return 0 */
    public function constInteger(): int
    {
    }

    /** @return 0.0 */
    public function constFloat(): float
    {
    }

    /** @return 'foo' */
    public function constString(): string
    {
    }

    /** @return 'foo'|null */
    public function constNullableString(): ?string
    {
    }

    /** @return 'foo'|'bar' */
    public function constUnionString(): string
    {
    }

    /** @return class-string */
    public function classString(): string
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
    public function noReturnTypeHint(): void
    {
    }

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

    private function noTypeHintNoAnnotation()
    {
        return true;
    }
}
