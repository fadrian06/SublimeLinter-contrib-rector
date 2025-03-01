<?php

namespace SLRector\Rules\IsIterableRector;

use Traversable;

is_array($foo) || $foo instanceof Traversable;
