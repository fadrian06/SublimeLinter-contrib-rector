<?php

namespace SLRector\Rules\IfIssetToCoalescingRector;

class SomeClass
{
    private $items = [];

    public function resolve($key)
    {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        }

        return 'fallback value';
    }
}
