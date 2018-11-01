<?php

namespace Doctordogg\HelloWorldVMMV\Model;

class FastLoaded
{
    public function __construct()
    {

    }

    public function getHello()
    {
        return __CLASS__ . ': [HELLO]' . "\n";
    }
}