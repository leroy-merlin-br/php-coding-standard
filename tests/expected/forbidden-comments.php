<?php
namespace Test;

class Foo
{
    public function __construct()
    {
        echo 'Hello';
    }

    /**
     * Bar getter.
     */
    public function getBar(): int
    {
        return 123;
    }

    /**
     * Very important getter.
     */
    public function getBaz(): int
    {
        return 456;
    }
}
