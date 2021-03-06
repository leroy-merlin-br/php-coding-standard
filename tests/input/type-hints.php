<?php

namespace Types;

class TypeHint
{
    public $data;

    /**
     * @var string
     */
    public $name;

    public int $age;

    /**
     * @var ?int
     */
    public $foo;

    /**
     * @const float
     */
    public const PI = 3.1415;

    public function test()
    {
        // Do nothing
    }

    public function get($id): int
    {
        //
    }

    public function getWithParamTypeHint(int $id): int
    {
        return 1;
    }

    /**
     * @param int $id
     * @dataProvider
     */
    public function post($id): void
    {
        //
    }

    /**
     * @return int
     */
    public function returnType()
    {
        return 2;
    }
}
