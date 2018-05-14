<?php

namespace Icube\Quiz\Model\ResourceModel;

class Employee extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
	{
		$this->_init('icube_employee', 'entity_id');
	}
}