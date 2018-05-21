<?php

namespace Icube\Training\Controller\Adminhtml\Trainee;

use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
	protected $resultPageFaactory;

	public function __construct(
		Context $context,
		PageFactory $resultPageFaactory
	)
	{
		$this->resultPageFaactory = $resultPageFaactory;
		parent::__construct($context);
	}

	public function execute()
	{
		$resultPage = $this->resultPageFaactory->create();
		$resultPage->addBreadcrumb(__('Trainee List'), __('Trainee List'));
		$resultPage->getConfig()->getTitle()->prepend(__('Trainee List Page'));
		
		return $resultPage;
	}

	protected function _isAllowed()
	{
		return $this->_authorization->isAllowed('Icube_Training::trainee_list');
	}
}