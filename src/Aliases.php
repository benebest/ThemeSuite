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
		];
	}
	else
	{
		$isSuite = true;
		// In Theme Suite
		$classes = [
			'Meno\\Themes\\Stubs\\Breadcrumbs',
			'Meno\\Themes\\Stubs\\Decorator',
			'Meno\\Themes\\Stubs\\HighlightJsPackage',
			'Meno\\Themes\\Stubs\\SearchDrawer',
			'Meno\\Themes\\Stubs\\LinkBlocks',
			'Meno\\Themes\\Stubs\\PageLinks',
			'Meno\\Themes\\Stubs\\PartialBlock',
			'Meno\\Themes\\Stubs\\SocialIcons',
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
		class_alias($className, $shortName);

		// Generate stubs for IDE
		if($isSuite && PHP_SAPI === 'cli')
		{
			$path = __DIR__ . '/Stubs/for-ide';
			$filename = "$path/$shortName.php";

			$existing = '';

			if(is_readable($filename))
			{
				$existing = file_get_contents($existing);
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
