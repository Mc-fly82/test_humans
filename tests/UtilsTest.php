<?php

use App\Utils;
use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{

	protected Utils $utils;

	protected function setUp(): void
	{
		parent::setUp();
		$this->utils = new Utils();
	}

	/**
	 * @test
	 * @group UtilsTest
	 *
	 */
	public function is_even_return_true_when_passed_22()
	{
		$this->assertEquals(true, $this->utils->isIntEven(22));
	}

	/**
	 * @test
	 * @group UtilsTest
	 */
	public function is_even_return_false_when_passed_21()
	{
		$this->assertEquals(false, $this->utils->isIntEven(21));
	}

}