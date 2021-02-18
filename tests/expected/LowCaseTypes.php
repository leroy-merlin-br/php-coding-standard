<?php

namespace Types;

class LowCaseTypes
{
    public function stringToInt(string $string): int
    {
        return (int) $string;
    }

    public function returnString(): string
    {
        return 'foo';
    }
}
