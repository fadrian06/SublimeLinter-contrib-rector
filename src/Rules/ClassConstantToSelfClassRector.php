<?php

namespace SLRector\Rules\ClassConstantToSelfClassRector;

class SomeClass
{
    public function callOnMe()
    {
        var_dump(__CLASS__);
    }
}
