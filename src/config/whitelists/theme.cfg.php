<?php

use Maslosoft\Themes\ThemeWhitelist;
use Maslosoft\Themes\ThemeValidator;

return [
	ThemeValidator::WhitelistId => [
		'class' => ThemeWhitelist::class,
		'whitelist' => [
			'variables' => [
				'content',
				'breadcrumbs',
				'homeUrl'
			],
			'functions' => [
				'strlen',
				'strtolower',
				'strtoupper',
				'ucwords',
				'echo',
				'tx'
			],
			'methods' => [
				'Breadcrumbs::widget',
				'Decorator::copyright',
				'HighlightJsPackage::withStyle',
				'SearchDrawer::widget',
				'LinkBlocks::widget',
				'PageLinks::widget',
				'SocialIcons::widget'
			]
		]
	]
];