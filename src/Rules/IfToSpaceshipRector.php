<?php

namespace SLRector\Rules\IfToSpaceshipRector;

usort($languages, function ($first, $second) {
    if ($first[0] === $second[0]) {
        return 0;
    }

    return ($first[0] < $second[0]) ? 1 : -1;
});
