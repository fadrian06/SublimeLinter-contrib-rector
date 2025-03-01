<?php

namespace SLRector\Rules\SensitiveConstantNameRector;

define('FOO', 42, true);
var_dump(FOO);
var_dump(foo);
