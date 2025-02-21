<?php

namespace SLRector\Rules\GetCalledClassToSelfClassRector;

final class SomeClass
{
    public function callOnMe()
    {
        return get_called_class();
    }
}
