<?php

namespace Types;

class TypeHint
{
    public string $data;

    public string $name;

    public int $age;

    public ?int $foo = null;

    /**
     * @const float
     */
    public const PI = 3.1415;

    public function test(): void
    {
        // Do nothing
    }

    public function get(int $id): int
    {
    }

    public function getWithParamTypeHint(int $id): int
    {
    }

    /**
     * @dataProvider
     */
    public function post(int $id): void
    {
    }

    public function returnType(): int
    {
        return 2;
    }
}
