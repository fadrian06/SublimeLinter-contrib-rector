<?php

namespace SLRector\Rules\ClosureToArrowFunctionRector;

final class Meetup {}

class SomeClass
{
    public function run($meetups): ?array
    {
        return array_filter($meetups, function (Meetup $meetup) {
            return is_object($meetup);
        });
    }
}
