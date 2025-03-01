<?php

namespace SLRector\Rules\RealToFloatTypeCastRector;

class SomeClass
{
    public function run(): void
    {
        $number = (real) 5;
        $number = (float) 5;
        $number = (float) 5;
    }
}
