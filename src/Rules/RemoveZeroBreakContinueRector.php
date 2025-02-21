<?php

namespace SLRector\Rules\RemoveZeroBreakContinueRector;

class SomeClass
{
    public function run($random)
    {
        continue 0;
        break 0;

        $five = 5;
        continue $five;

        break $random;
    }
}
