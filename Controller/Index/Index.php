<?php

namespace TruongNX\Tutorial\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
//    protected $_pageFactory;
//    public function __construct(
//        \Magento\Framework\App\Action\Context $context,
//        \Magento\Framework\View\Result\PageFactory $pageFactory
//    ) {
//        parent::__construct($context);
//        $this->_pageFactory = $pageFactory;
//    }

    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
