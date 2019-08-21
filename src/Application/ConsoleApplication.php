<?php


namespace Maslosoft\Themes\Application;

use Maslosoft\Themes\Application\Commands\ValidateCommand;
use Symfony\Component\Console\Application;

class ConsoleApplication extends Application
{
	const Logo = <<<LOGO
  ________                           _____       _ __     
 /_  __/ /_  ___  ____ ___  ___     / ___/__  __(_) /____ 
  / / / __ \/ _ \/ __ `__ \/ _ \    \__ \/ / / / / __/ _ \
 / / / / / /  __/ / / / / /  __/   ___/ / /_/ / / /_/  __/
/_/ /_/ /_/\___/_/ /_/ /_/\___/   /____/\__,_/_/\__/\___/ 


LOGO;

	public function __construct()
	{
		parent::__construct('Theme Suite', require __DIR__ . '/../version.php');
		$this->add(new ValidateCommand);
	}

	public function getHelp()
	{
		return self::Logo . parent::getHelp();
	}
}