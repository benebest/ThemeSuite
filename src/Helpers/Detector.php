<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 20.07.18
 * Time: 12:14
 */

namespace Meno\Themes\Helpers;


use Symfony\Component\Finder\Finder;

class Detector
{
	public function detectIn($folder)
	{
		$finder = new Finder();
		$finder->in($folder);
		$finder->files();

		foreach($finder as $fileInfo)
		{

		}
	}
}