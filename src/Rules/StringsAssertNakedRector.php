<?php

namespace SLRector\Rules\StringsAssertNakedRector;

function nakedAssert(): void
{
    assert('true === true');
    assert("true === true");
}
