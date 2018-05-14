<?php

namespace Icube\Quiz\Model;

class Employee extends \Magento\Framework\Model\AbstractModel implements EmployeeInterface, \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = "icube_quiz_employee";

	protected function _construct()
	{
		$this->_init('Icube\Quiz\Model\ResourceModel\Employee');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
}