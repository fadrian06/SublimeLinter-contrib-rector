<?php

namespace SLRector\Rules\BinaryOpBetweenNumberAndStringRector;

class SomeClass
{
    public function run(): void
    {
        $value = 5 + '';
        $value = 5.0 + 'hi';
    }
}
