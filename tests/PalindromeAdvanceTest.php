<?php

use App\Palindrome;
use App\PalindromeAdvance;
use App\Test\PalindromeTester;
use PHPUnit\Framework\TestCase;

class PalindromeAdvanceTest extends TestCase
{
	use PalindromeTester;

	protected function setUp(): void
	{
		parent::setUp();
		$this->polindrome = new PalindromeAdvance();
	}

	/**
	 * @test
	 * @group AdvancePalindromeTest
	 * @throws Exception
	 */
	public function advancePalindromeTest_isPal_throw_exception_on_negative_number()
	{
		$this->isPal_throw_exception_on_negative_number();
	}

	/**
	 * @test
	 * @group AdvancePalindromeTest
	 * @throws Exception
	 */
	public function advancePalindromeTest_isPal_pass()
	{
		$this->isPal_pass();
	}

	/**
	 * @test
	 * @group AdvancePalindromeTest
	 */
	public function advancePalindromeTest_isPal_fails()
	{
		$this->isPal_fails();
	}

	/**
	 * @test
	 * @group AdvancePalindromeTest
	 * @throws Exception
	 */
	public function advancePalindromeTest_findNextPalindrome_test()
	{
		$this->findNextPalindrome_test();
	}
}