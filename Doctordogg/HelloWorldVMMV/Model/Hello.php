<?php

namespace Doctordogg\HelloWorldVMMV\Model;

use Doctordogg\HelloWorldVMMV\Api\HelloInterface;

class Hello implements HelloInterface
{
    /**
     * Return greeting message to user
     *
     * @api
     *
     * @param string $name
     * @return string Greeting message to user with user's name.
     */
    public function name($name)
    {
        return "Hello, " . $name;
    }
}
