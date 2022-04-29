<?php

/**
 * @rule: SlevomatCodingStandard.Classes.ParentCallSpacing
 */

class Foo
{
    public function a(): void
    {
        echo 'a';
    }
}

class Bar extends Foo
{
    /**
     * @return string[]
     */
    public function names(): iterable
    {
        parent::class;
        parent::a();
        echo 'ola';
    }
}
