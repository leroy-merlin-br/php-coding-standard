<?php

/**
 * @rule: SlevomatCodingStandard.Functions.ArrowFunctionDeclaration
 */

array_filter([1, 2, 3, 4], fn ($number) => $number % 2 === 0);
