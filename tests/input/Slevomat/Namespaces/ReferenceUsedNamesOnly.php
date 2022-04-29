<?php

/**
 * @rule: SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly
 */

namespace Bar;

class Foo
{
    public function test(): void
    {
        \F\Q\N::doStuff();
    }
}
