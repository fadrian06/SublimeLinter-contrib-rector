<?php

namespace SLRector\Rules\NullCoalescingOperatorRector;

$array = [];
$array['user_id'] = $array['user_id'] ?? 'value';
