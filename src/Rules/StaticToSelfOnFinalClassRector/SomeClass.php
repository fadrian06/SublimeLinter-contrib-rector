<?php

namespace SLRector\Rules\StaticToSelfOnFinalClassRector;

final class SomeClass
{
    public function callOnMe()
    {
        var_dump(static::class);
    }
}
