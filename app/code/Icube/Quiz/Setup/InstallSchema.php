<?php

namespace Icube\Quiz\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{
	public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
	{
		$setup->startSetup();

		$table = $setup->getConnection()->newTable(
			$setup->getTable('icube_employee')
		)->addColumn(
			'entity_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			null,
			['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
			'Entity Id'
		)->addColumn(
			'name',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			[],
			'Employee Name'
		)->addColumn(
			'division',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			50,
			[],
			'Division'
		)->addColumn(
			'created_at',
			\Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
			null,
			['nullable' => true, 'default' => null],
			'Created Date'
		);
		$setup->getConnection()->createTable($table);

		$setup->endSetup();
	}
}
