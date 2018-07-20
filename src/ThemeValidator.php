<?php

/**
 * This software package is licensed under `BSD-3-Clause` license[s].
 *
 * @package meno-pro/theme-validator
 * @license BSD-3-Clause
 *
 * @copyright Copyright (c) Peter Maselkowski <office@maslosoft.com>
 * @link https://meno.pro/
 */

namespace Meno\Themes;


use function file_get_contents;
use function is_readable;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\NullLogger;

class ThemeValidator implements LoggerAwareInterface
{
	const WhitelistId = 'meno.theme.whitelist';

	use LoggerAwareTrait;

	public function __construct()
	{
		$this->logger = new NullLogger;
	}

	public function validate($file)
	{
//		$this->logger->info(txp("Validating: {name}", $file));

		assert(is_readable($file));

		$content = file_get_contents($file);

		$wl = new MenoList;
		return $wl->check($content);
	}
}