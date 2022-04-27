<?php

/**
 * @rule: SlevomatCodingStandard.Classes.ClassStructure
 */

class A
{
    use SomeTrait;

    const LOREM = 1;
}

class B
{
    const IPSUM = 1;
    private const LOREM = 1;
}

class C
{
    private const LOREM = 1;

    private static $lorem;
}

class D
{
    protected $lorem;
    private static $ipsum;
}

class E
{
    public function __construct()
    {
    }

    static function staticLorem(): void
    {
    }
}

class F
{
    protected static function staticDolor(): void
    {
    }

    private function __call($name, $arguments): void
    {
    }
}

class G
{
    public function __construct()
    {
    }

    public function __get($name): void
    {
    }
}

class H
{
    private function sit(): void
    {
    }

    private function __call($name, $arguments): void
    {
    }
}

class I
{
    protected static function staticDolor(): void
    {
    }

    private function sit(): void
    {
    }
}

class J
{
    protected static function staticDolor(): void
    {
    }

    private static function staticSit(): void
    {
    }
}

class K
{
    function lorem(): void
    {
    }

    private function sit(): void
    {
    }
}

class L
{
    function lorem(): void
    {
        new class ()
        {
            const IPSUM = 1;
            private const LOREM = 1;

            function ipsum(): void
            {
            }

            private function lorem(): void
            {
            }
        };
    }
}

interface Intf
{
    const LOREM = 1;

    function dolor(): void;

    static function staticLorem(): void;

    public static function staticIpsum(): void;
}

trait Tr
{
    use SomeTrait;

    private int $sit;

    private static $staticSit;

    public function __construct()
    {
    }

    function lorem(): void
    {
    }

    protected static function staticDolor(): void
    {
    }

    private function sit(): void
    {
    }

    private static function staticSit(): void
    {
    }

    private function __call($name, $arguments): void
    {
    }
}

class M
{
    private function __construct()
    {
    }

    /**
     * Static constuctor
     *
     * @return static
     */
    public static function staticConstructorM()
    {
    }

    public static function notAStaticConstructor(): D
    {
    }

    public static function notAStaticConstructorA(): void
    {
    }

    public static function notAStaticConstructorB(): D
    {
    }

    public static function notAStaticConstructorC(): D
    {
    }
}

abstract class WithAbstract
{
    abstract protected static function abstractStaticMethod(): void;

    abstract public function abstractMethod(): void;

    public function notAbtractMethod(): void
    {
    }
}

class N
{
    public $whatever;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected array $hidden = [
        'password',
        'remember_token',
    ];
}
