<?php

namespace SLRector\Rules\CreateFunctionToAnonymousFunctionRector;

class ClassWithCreateFunction
{
    public function run(): void
    {
        $callable = create_function('$matches', "return '$delimiter' . strtolower(\$matches[1]);");
    }
}
