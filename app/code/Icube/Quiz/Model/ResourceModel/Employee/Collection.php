<?php

namespace Icube\Quiz\Model\ResourceModel\Employee;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected function _construct()
	{
		$this->_init('Icube\Quiz\Model\Employee', 'Icube\Quiz\Model\ResourceModel\Employee');
	}
}
