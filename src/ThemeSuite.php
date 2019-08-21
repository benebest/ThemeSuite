<?php


namespace Maslosoft\Themes;


class ThemeSuite
{
	/**
	 * Version number holder
	 * @var string
	 */
	private static $_version = null;

	/**
	 * Get theme suite version
	 * @return string
	 */
	public function getVersion()
	{
		if (null === self::$_version)
		{
			self::$_version = require __DIR__ . '/version.php';
		}
		return self::$_version;
	}
}