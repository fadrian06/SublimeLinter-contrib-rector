<?php

namespace SLRector\Rules\ExportToReflectionFunctionRector;

use ReflectionFunction;

$reflectionFunction = ReflectionFunction::export('foo');
$reflectionFunctionAsString = ReflectionFunction::export('foo', true);
