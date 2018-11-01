<?php

namespace Doctordogg\HelloWorldVMMV\Model;

class Container {

    private $fastLoaded;
    private $slowLoaded;

    /**
     * Container constructor.
     * @param FastLoaded $fastLoaded
     * @param SlowLoaded $slowLoaded
     */
    public function __construct(FastLoaded $fastLoaded, SlowLoaded $slowLoaded)
    {
        $this->fastLoaded = $fastLoaded;
        $this->slowLoaded = $slowLoaded;
    }

    /**
     * @return string
     */
    public function getHelloWithFastObject() : string
    {
        return $this->fastLoaded->getHello();
    }

    /**
     * @return string
     */
    public function getHelloWithSlowObject() :string
    {
        return $this->slowLoaded->getHello();
    }
}
