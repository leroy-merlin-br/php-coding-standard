<?php

/**
 * @rule: SlevomatCodingStandard.Classes.ClassMemberSpacing
 */


class Foo
{
    use GoodTrait;

    public int $number;
    public string $text;

    public function execute(): void
    {
        return;
    }
    protected function bar(): void
    {
        return;
    }
    private function justMe()
    {
        return 'whatever';
    }
}
