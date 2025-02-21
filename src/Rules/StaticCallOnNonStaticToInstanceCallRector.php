<?php

namespace SLRector\Rules\StaticCallOnNonStaticToInstanceCallRector;

class Something
{
    public function doWork() {}
}

class Another
{
    public function run()
    {
        return Something::doWork();
    }
}
