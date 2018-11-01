<?php

namespace Doctordogg\HelloWorldVMMV\Api;

interface HelloInterface {

    /**
     * Return greeting message to user
     *
     * @api
     *
     * @param string $name
     * @return string Greeting message to user with user's name.
     */
    public function name($name);
}
