<?php

/**
 * @rule: SlevomatCodingStandard.Namespaces.RequireOneNamespaceInFile
 */

namespace Foo
{

    namespace\hoo();

}

namespace Boo
{

    namespace\boo();
    namespace\foo();

}

namespace {
}
