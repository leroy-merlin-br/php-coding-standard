<?php

/**
 * @rule: SlevomatCodingStandard.Variables.UselessVariable
 */

function () {
    return true;
};

function () {
    return $b + 1;
};

function () {
    return $c - 1;
};

function () {
    return $d * 1;
};

function () {
    return $e / 1;
};

function () {
    return $f ** 1;
};

function () {
    return $g % 1;
};

function () {
    return $h & 1;
};

function () {
    return $i | 1;
};

function () {
    return $j ^ 1;
};

function () {
    return $k << 1;
};

function () {
    return $l >> 1;
};

function () {
    return $m . 1;
};

function sameVariableInDifferentScope()
{
    return array_map(function () {
        return $n + 1;
    }, []);
}

function moreVariableOneWithoutAssigment()
{
    $o++;

    return 10;
}

function assigmentAsFunctionParametr()
{
    doSomething($p = 0);

    return $p;
}

function assigmentAfterAssignment()
{
    doSomething($qq = $q = 0);

    return $q;
}

function afterIfStatement(float $seconds): string
{
    if ($seconds < 1) {
        return round($seconds * 1000, 2) . 'ms';
    }

    return round($seconds, 2) . 's';
}

return null;
