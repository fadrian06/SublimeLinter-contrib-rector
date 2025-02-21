<?php

namespace SLRector\Rules\StringClassNameToClassConstantRector;

class AnotherClass {}

class SomeClass
{
    public function run()
    {
        return '\SLRector\Rules\StringClassNameToClassConstantRector\AnotherClass';
    }
}
