<?php

namespace Icube\Quiz\Controller\Save;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $post = $this->getRequest()->getPostValue();

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();       
        $question = $objectManager->create('Icube\Quiz\Model\Employee');
        $question->setData($post);
        $question->save();
        $this->messageManager->addSuccess( __('Input data success.') );
        $this->_redirect('employee/');
        return;
    }
}