<?php

/**
 * @rule: SlevomatCodingStandard.Classes.ClassMemberSpacing
 */

use GoodTrait;

class Foo
{
    use GoodTrait;
    public int $number;
    public string $text;
    public function execute()
    {
        return;
    }
    protected function bar()
    {
        return;
    }
    private function justMe()
    {
        return 'whatever';
    }
}