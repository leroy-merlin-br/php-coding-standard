<?php

/**
 * @rule: SlevomatCodingStandard.Classes.PropertySpacing
 */

abstract class Foo
{
    public $foo = 'bar';

    public static string $staticFoo = 'bar'; // there may be a comment

    protected string $bar = 'foo';

    protected static string $staticBar = 'foo';

    private int $lvl = 9001;

    private static int $staticLvl = 666;// strange but yeah, whatever

    /**
     * whatever
     */
    abstract public static function wow(): void;
    /**
     * who cares
     */
    private function such(): void
    {
    }
}

abstract class Bar
{
    public $foo = 'bar';

    public static string $staticFoo = 'bar'; // there may be a comment

    protected string $bar = 'foo';

    protected static string $staticBar = 'foo';

    private int $lvl = 9001;

    private $noComment = 'noComment';

    private int $int = 0;

    private string $string = '';

    private static int $staticLvl = 666;// strange but yeah, whatever

    /**
     * whatever
     */
    abstract public static function wow(): void;
    /**
     * who cares
     */
    private function such(): void
    {
    }
}
