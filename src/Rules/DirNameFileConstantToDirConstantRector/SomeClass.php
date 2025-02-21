<?php

namespace SLRector\Rules\DirNameFileConstantToDirConstantRector;

class SomeClass
{
    public function run(): string
    {
        return dirname(__FILE__);
    }
}
