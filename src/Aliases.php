<?php

(function () {

	if (defined('MASLOSOFT_DF_VERSION'))
	{
		$isSuite = false;
		// In application
		$classes = [
			'Maslosoft\\Widgets\\Breadcrumbs',
			'Maslosoft\\Widgets\\Html\\Decorator',
			'Maslosoft\\Widgets\\JavaScript\\Packages\\HighlightJsPackage',
			'Maslosoft\\Widgets\\Search\\SearchDrawer',
			'Maslosoft\\Cms\\Widgets\\Menu\\LinkBlocks',
			'Maslosoft\\Cms\\Widgets\\Menu\\PageLinks',
			'Maslosoft\\Cms\\Widgets\\PartialBlock',
			'Maslosoft\\Social\\Widgets\\SocialIcons',
			'Maslosoft\\Shop\\Widgets\\CartIcon',
		];
	}
	else
	{
		$isSuite = true;
		// In Theme Suite
		$classes = [
			'Maslosoft\\Themes\\Stubs\\Breadcrumbs',
			'Maslosoft\\Themes\\Stubs\\Decorator',
			'Maslosoft\\Themes\\Stubs\\HighlightJsPackage',
			'Maslosoft\\Themes\\Stubs\\SearchDrawer',
			'Maslosoft\\Themes\\Stubs\\LinkBlocks',
			'Maslosoft\\Themes\\Stubs\\PageLinks',
			'Maslosoft\\Themes\\Stubs\\PartialBlock',
			'Maslosoft\\Themes\\Stubs\\SocialIcons',
			'Maslosoft\\Themes\\Stubs\\CartIcon',			
		];
	}

	if($isSuite && !function_exists('tx'))
	{
		function tx($message, $context = '')
		{
			return $message;
		}
	}

	foreach($classes as $className)
	{
		$pos = strrpos($className, '\\') + 1;
		$shortName = substr($className, $pos);
		@class_alias($className, $shortName);

		// Generate stubs for IDE
		if($isSuite && PHP_SAPI === 'cli')
		{
			$path = __DIR__ . '/Stubs/for-ide';
			$filename = "$path/$shortName.php";

			$existing = '';

			if(is_readable($filename))
			{
				$existing = file_get_contents($filename);
			}

			$content = <<<PHP
<?php
// Auto generated for IDE. Do not modify.
class $shortName extends $className
{
}
PHP;
			if($existing !== $content && is_writable($filename))
			{
				file_put_contents($filename, $content);
			}
		}
	}
})();
