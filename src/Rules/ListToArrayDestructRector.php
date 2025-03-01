<?php

namespace SLRector\Rules\ListToArrayDestructRector;

class SomeClass
{
    public function run(): void
    {
        list($id1, $name1) = $data;

        foreach ($data as list($id, $name)) {
        }
    }
}
