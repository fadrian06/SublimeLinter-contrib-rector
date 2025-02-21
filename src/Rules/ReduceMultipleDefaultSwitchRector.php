<?php

namespace SLRector\Rules\ReduceMultipleDefaultSwitchRector;

switch ($expr) {
    default:
        echo "Hello World";

    default:
        echo "Goodbye Moon!";
        break;
}
