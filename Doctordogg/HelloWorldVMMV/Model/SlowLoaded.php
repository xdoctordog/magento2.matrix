<?php

namespace Doctordogg\HelloWorldVMMV\Model;

class SlowLoaded
{
    public function __construct()
    {
        sleep(3);
    }

    public function getHello()
    {
        return __CLASS__ . ': [HELLO]' . "\n";
    }
}