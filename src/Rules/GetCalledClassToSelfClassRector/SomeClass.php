<?php

namespace SLRector\Rules\GetCalledClassToSelfClassRector;

class SomeClass
{
    public function run()
    {
        return get_called_class();
    }
}
