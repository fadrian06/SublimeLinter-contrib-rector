<?php

namespace SLRector\Rules\FilterVarToAddSlashesRector;

$var = "Satya's here!";
filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES);
