<?php


namespace Maslosoft\Themes\Application\Commands;

use Exception;
use Symfony\Component\Console\Command\Command as ConsoleCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ValidateCommand extends ConsoleCommand
{
	protected function configure()
	{
		$this->setName("validate");
		$this->setDescription("Validate theme");
		$this->setDefinition([
		]);

		$help = <<<EOT
The <info>validate</info> command will check theme for allowed PHP expressions, method calls and syntax.
EOT;
		$this->setHelp($help);
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		throw new Exception('Not implemented');
	}
}