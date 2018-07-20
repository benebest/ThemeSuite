<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 20.07.18
 * Time: 12:46
 */

namespace Meno\Themes;


use Maslosoft\EmbeDi\Adapters\ArrayAdapter;
use Maslosoft\EmbeDi\EmbeDi;
use Maslosoft\Whitelist\Whitelist;

/**
 * Whitelist preconfigured for meno
 * @package Meno\Themes
 */
class MenoList extends Whitelist
{
	public function __construct($config = ThemeValidator::WhitelistId)
	{
		static $initialized = false;
		if(!$initialized)
		{
			$cfg = require __DIR__ . '/config/whitelist.cfg.php';
			EmbeDi::fly()->addAdapter(new ArrayAdapter($cfg));
			$initialized = true;
		}
		parent::__construct($config);
	}
}