<?php

/**
 * @rule: SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly
 */

namespace Bar;

use F\Q\N;

class Foo
{
    public function test(): void
    {
        N::doStuff();
    }
}
