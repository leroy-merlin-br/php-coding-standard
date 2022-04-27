<?php

/**
 * @rule: SlevomatCodingStandard.TypeHints.PropertyTypeHint
 */

class Whatever
{
    /**
     * @see Anything
     */
    private $noVarAnnotation;

    /**
     * @var array
     */
    private array $arrayWithMissingTraversableTypeHintSpecification;

    /**
     * @var iterable
     */
    private iterable $iterableWithMissingTraversableTypeHintSpecification;

    private Traversable $specificTraversableWithMissingTraversableTypeHintSpecification;

    /**
     * @var
     */
    private $invalidVarAnnotation;
}
