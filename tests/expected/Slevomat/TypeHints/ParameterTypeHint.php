<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.ParameterTypeHint
 */

class Whatever
{
    /**
     * @param int[] $a
     */
    public function arrayTypeHint(array $a): void
    {
    }

    /**
     * @param int[]|null $a
     */
    public function arrayTypeHintWithNull(?array $a): void
    {
    }

    /**
     * @param array{foo: int} $a
     */
    public function arrayShapeTypeHint(array $a): void
    {
    }

    public function twoTypeWithNull(?string $a): void
    {
    }

    /**
     * @param int[]|\Traversable $a
     */
    public function specificTraversable($a): void
    {
    }

    public function variadic(string ...$a): void
    {
    }

    public function reference(string &$a): void
    {
    }

    public function uselessAnnotation(string $a): void
    {
    }

    public function missingAnnotationForTraversable(array $a): void
    {
    }

    /**
     * @param array $a
     */
    public function missingItemsSpecification(array $a): void
    {
    }

    /**
     * @param \Closure(): array $parameter
     */
    public function callableParameter(Closure $parameter): void
    {
    }

    public function onlyTraversable(Traversable $a): void
    {
    }

    /**
     * @param array{array} $a
     */
    public function arrayShapeWithoutItemsSpecification(array $a): void
    {
    }

    /**
     * @param \Generic<array> $a
     */
    public function genericWithoutItemsSpecification(Generic $a): void
    {
    }

    /**
     * @param array[] &\Traversable $a
     */
    public function traversableIntersection($a): void
    {
    }

    /**
     * @param \Traversable &array[] $a
     */
    public function traversableIntersectionDifferentOrder($a): void
    {
    }

    public function traversableNull(?Traversable $a): void
    {
    }

    public function objectParameter(object $a): void
    {
    }

    /**
     * @param array<string>|array<int> $a
     */
    public function unionWithSameBase(array $a): void
    {
    }

    /**
     * @param array<string>|array<int>|array<bool> $a
     */
    public function unionWithSameBaseAndMoreTypes(array $a): void
    {
    }

    /**
     * @param array<int>|bool[] $a
     */
    public function unionWithSameBaseToo(array $a): void
    {
    }

    /**
     * @param array<string>|array<int>|array<bool>|null $a
     */
    public function unionWithSameNullableBase(?array $a): void
    {
    }

    public function nullable(?int $a): void
    {
    }

    /**
     * @param mixed[]|array $a
     */
    public function traversableArray(array $a): void
    {
    }

    public function oneLineDocComment(string $a): void
    {
    }

    /** @param true $a */
    public function constTrue(bool $a): void
    {
    }

    /** @param FALSE $a */
    public function constFalse(bool $a): void
    {
    }

    /** @param 0 $a */
    public function constInteger(int $a): void
    {
    }

    /** @param 0.0 $a */
    public function constFloat(float $a): void
    {
    }

    /** @param 'foo' $a */
    public function constString(string $a): void
    {
    }

    /** @param 'foo'|null $a */
    public function constNullableString(?string $a): void
    {
    }

    /** @param 'foo'|'bar' $a */
    public function constUnionString(string $a): void
    {
    }

    /** @param class-string $a */
    public function classString(string $a): void
    {
    }

    /** @param mixed $a */
    public function mixedType($a): void
    {
    }

    /** @param mixed|null $a */
    public function nullableMixedType($a): void
    {
    }

    /**
     * @param string[] $a
     */
    public function uselessSuppressOfUselessAnnotation(array $a): void
    {
    }

    /**
     * @param string[] $a
     */
    public function uselessSuppressOfMissingTraversableTypeHintSpecification(array $a): void
    {
    }

    /**
     * @phpstan-param class-string $a
     */
    public function uselessSuppressOfMissingAnyTypeHintWithTypeHint(string $a): void
    {
    }

    /**
     * @phpstan-param class-string $a
     */
    public function uselessSuppressOfMissingNativeTypeHintWithTypeHint(string $a): void
    {
    }

    /**
     * @param scalar $a
     */
    public function uselessSuppressOfMissingNativeTypeHint($a): void
    {
    }

    public function uselessAnnotationWithShortNullable(?int $a): void
    {
    }

    private function noTypeHintNoAnnotation($a): void
    {
    }
}
