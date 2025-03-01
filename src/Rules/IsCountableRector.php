<?php

namespace SLRector\Rules\IsCountableRector;

use Countable;

is_array($foo) || $foo instanceof Countable;
