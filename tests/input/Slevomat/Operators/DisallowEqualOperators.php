<?php

/**
 * @rule: SlevomatCodingStandard.Operators.DisallowEqualOperators
 */

$foo == 123;
123 == $foo;
new \DateTimeImmutable() != new \DateTimeImmutable();
true != 0.0;
false <> true;
