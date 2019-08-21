<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 20.07.18
 * Time: 12:46
 */

namespace Maslosoft\Themes;


use Maslosoft\EmbeDi\Adapters\ArrayAdapter;
use Maslosoft\EmbeDi\EmbeDi;
use Maslosoft\Whitelist\Whitelist;

/**
 * Whitelist preconfigured for theme
 * @package Maslosoft\Themes
 */
class ThemeWhitelist extends Whitelist
{
	public function __construct($config = ThemeValidator::WhitelistId)
	{
		static $initialized = false;
		if(!$initialized)
		{
			$cfg = require __DIR__ . '/config/whitelists/theme.cfg.php';
			EmbeDi::fly()->addAdapter(new ArrayAdapter($cfg));
			$initialized = true;
		}
		parent::__construct($config);
	}
}