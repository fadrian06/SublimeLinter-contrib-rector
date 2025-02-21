<?php

namespace SLRector\Rules\RemoveReferenceFromCallRector;

final class SomeClass
{
    public function run($one)
    {
        return strlen(&$one);
    }
}
