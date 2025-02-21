<?php

namespace SLRector\Rules\RenameMktimeWithoutArgsToTimeRector;

class SomeClass
{
    public function run()
    {
        $time = mktime(1, 2, 3);
        $nextTime = mktime();
    }
}
