<?php

/**
 * @rule: SlevomatCodingStandard.Functions.UnusedInheritedVariablePassedToClosure
 */

$logic = 'code';

array_filter([], function (int $element) {
    return true;
});
