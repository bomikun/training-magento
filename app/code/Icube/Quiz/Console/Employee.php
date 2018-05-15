<?php

namespace Icube\Quiz\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Icube\Quiz\Helper\Data;

class Employee extends Command
{
	protected $Helper;

	public function __construct(
		\Icube\Quiz\Helper\Data $helper
	)
	{
		$this->helper = $helper;
		parent::__construct();
	}

	protected function configure()
	{
		$this->setName('quiz:employee');
		$this->setDescription('Quiz command line tools');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln($this->helper->getQuizHelper()." ");	
	}
}