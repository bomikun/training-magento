<?php

namespace Icube\Training\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Icube\Training\Helper\Data;

class Sayhello extends Command
{
	protected $Helper;

	public function __construct(
		\Icube\Training\Helper\Data $helper
	)
	{
		$this->helper = $helper;
		parent::__construct();
	}

	protected function configure()
	{
		$this->setName('training:sayhello');
		$this->setDescription('Training command line');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln("Hello World Icube!");	
	}
}