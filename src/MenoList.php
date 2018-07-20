<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 20.07.18
 * Time: 12:46
 */

namespace Meno\Themes;


use Maslosoft\Whitelist\Whitelist;

/**
 * Whitelist preconfigured for meno
 * @package Meno\Themes
 */
class MenoList extends Whitelist
{
	public function __construct($config = ThemeValidator::WhitelistId)
	{
		parent::__construct($config);
	}
}