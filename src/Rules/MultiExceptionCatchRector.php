<?php

namespace SLRector\Rules\MultiExceptionCatchRector;

use Exception;

final class ExceptionType1 extends Exception {}
final class ExceptionType2 extends Exception {}

try {
    // Some code...
} catch (ExceptionType1 $exception) {
    $sameCode;
} catch (ExceptionType2 $exception) {
    $sameCode;
}
