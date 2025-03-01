<?php

namespace SLRector\Rules\StringifyDefineRector;

class SomeClass
{
    public function run(int $a): void
    {
        define(CONSTANT_2, 'value');
        define('CONSTANT', 'value');
    }
}
