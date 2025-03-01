<?php

namespace SLRector\Rules\ArrayKeyExistsOnPropertyRector;

class SomeClass
{
    public $value;
}

$someClass = new SomeClass;

array_key_exists('value', $someClass);
