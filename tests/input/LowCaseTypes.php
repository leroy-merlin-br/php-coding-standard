<?php

namespace Types;

class LowCaseTypes
{
    public function stringToInt(String $string) : int
    {
        return (int) $string;
    }

    public function returnString() : String
    {
        return 'foo';
    }
}
