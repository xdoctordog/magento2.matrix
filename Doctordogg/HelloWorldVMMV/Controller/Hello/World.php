<?php

namespace Doctordogg\HelloWorldVMMV\Controller\Hello;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class World extends \Magento\Framework\App\Action\Action {

    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo '<h1>You have did it!</h1>';
        $pageObject = $this->pageFactory->create();

        return $pageObject;
    }
}
