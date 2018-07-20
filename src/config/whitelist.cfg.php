<?php

use Maslosoft\Whitelist\Whitelist;
use Meno\Themes\MenoList;
use Meno\Themes\ThemeValidator;

return [
	ThemeValidator::WhitelistId => [
		'class' => MenoList::class,
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
				'SocialIcons::widget',

				'Maslosoft\Widgets\Breadcrumbs::widget',
				'Maslosoft\Widgets\Html\Decorator::copyright',
				'Maslosoft\Widgets\JavaScript\Packages\HighlightJsPackage::withStyle',
				'Maslosoft\Widgets\Search\SearchDrawer::widget',
				'Maslosoft\Cms\Widgets\Menu\LinkBlocks::widget',
				'Maslosoft\Cms\Widgets\Menu\PageLinks::widget',
				'Maslosoft\Social\Widgets\SocialIcons::widget',
			]
		]
	]
];