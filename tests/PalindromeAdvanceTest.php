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
	 * @group SimplePalindromeTest
	 */
	public function simplePalindromeTest_is_even_return_true_when_passed_22()
	{
		$this->is_even_return_true_when_passed_22();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 */
	public function simplePalindromeTest_is_even_return_false_when_passed_21()
	{
		$this->is_even_return_false_when_passed_21();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 */
	public function simplePalindromeTest_numLengthIsEven_return_false_when_passed_100()
	{
		$this->numLengthIsEven_return_false_when_passed_100();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 */
	public function simplePalindromeTest_numLengthIsEven_return_true_when_passed_10()
	{
		$this->numLengthIsEven_return_true_when_passed_10();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 */
	public function simplePalindromeTest_getNumberMedianDigitIndex_returns_1_when_given_100()
	{
		$this->getNumberMedianDigitIndex_returns_1_when_given_100();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 */
	public function simplePalindromeTest_getNumberMedianDigitIndex_returns_minus_1_when_geven_10()
	{
		$this->getNumberMedianDigitIndex_returns_minus_1_when_geven_10();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 * @throws Exception
	 */
	public function simplePalindromeTest_isPalUtil_check_if_a_even_length_number_is_a_palindrome()
	{
		$this->isPalUtil_check_if_a_even_length_number_is_a_palindrome();
	}

	/**
	 * @test
	 * @group SimplePalindromeTest
	 * @throws Exception
	 */
	public function simplePalindromeTest_isPalUtil_check_if_a_odd_length_number_is_a_palindrome()
	{
		$this->isPalUtil_check_if_a_odd_length_number_is_a_palindrome();
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