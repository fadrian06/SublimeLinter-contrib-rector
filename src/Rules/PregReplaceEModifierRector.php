<?php

namespace SLRector\Rules\PregReplaceEModifierRector;

class SomeClass
{
    public function callOnMe()
    {
        $comment = preg_replace('~\b(\w)(\w+)~e', '"$1".strtolower("$2")', $comment);
    }
}
