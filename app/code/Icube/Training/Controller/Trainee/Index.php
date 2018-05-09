<?php

namespace Icube\Training\Controller\Trainee;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class Index extends Action
{
	protected $resultPageFaactory;

	public function __construct(
		Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFaactory
	)
	{
		$this->resultPageFaactory = $resultPageFaactory;
		parent::__construct($context);
	}

	public function execute()
	{
		$resultPage = $this->resultPageFaactory->create();
		return $resultPage;
	}
}