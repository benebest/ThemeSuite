<?php

namespace Validator;

use Meno\Themes\ThemeValidator;

class ValidTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

	/**
	 * @var ThemeValidator
	 */
    private $validator = null;
    
    protected function _before()
    {
    	$this->validator = new ThemeValidator;
    }

    protected function _after()
    {
    }

    // tests
    public function testValidatingTheme()
    {
    	$file = __DIR__ . '/valid/maslosoft.php';

    	$isValid = $this->validator->validate($file);

    	$this->assertTrue($isValid, 'Theme passed validation');
    }
}