<?php

use App\Palindrome;
use App\Test\PalindromeTester;
use PHPUnit\Framework\TestCase;

class SimplePalindromeTest extends TestCase
{
	use PalindromeTester;

	protected function setUp(): void
	{
		parent::setUp();
		$this->polindrome = new Palindrome();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 * @throws Exception
	 */
	public function simplePalindromeTest_isPal_throw_exception_on_negative_number()
	{
		$this->isPal_throw_exception_on_negative_number();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 * @throws Exception
	 */
	public function simplePalindromeTest_isPal_pass()
	{
		$this->isPal_pass();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 */
	public function simplePalindromeTest_isPal_fails()
	{
		$this->isPal_fails();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 * @throws Exception
	 */
	public function simplePalindromeTest_findNextPalindrome_test()
	{
		$this->findNextPalindrome_test();
	}

}