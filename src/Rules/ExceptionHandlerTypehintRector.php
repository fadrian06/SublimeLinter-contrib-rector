<?php

namespace SLRector\Rules\ExceptionHandlerTypehintRector;

use Exception;

function handler(Exception $exception) {}

set_exception_handler('handler');
