<?php

namespace SLRector\Rules\TernaryToSpaceshipRector;

function order_func($a, $b)
{
    return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
}
