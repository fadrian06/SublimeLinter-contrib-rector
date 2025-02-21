<?php

namespace SLRector\Rules\BreakNotInLoopOrSwitchToReturnRector;

class SomeClass
{
    public function run()
    {
        if ($isphp5)
            return 1;
        else
            return 2;
        break;
    }
}
