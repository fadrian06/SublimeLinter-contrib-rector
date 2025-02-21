<?php

namespace SLRector\Rules\ThisCallOnStaticMethodToStaticCallRector;

class SomeClass
{
    public static function run()
    {
        $this->eat();
    }

    public static function eat() {}
}
