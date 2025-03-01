<?php

namespace SLRector\Rules\GetClassOnNullRector;

final class SomeClass
{
    public function getItem(): string
    {
        $value = null;

        return get_class($value);
    }
}
