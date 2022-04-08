<?php

use App\Palindrome;
use App\Test\PalindromeTester;
use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
	use PalindromeTester;

	protected function setUp(): void
	{
		parent::setUp();
		$this->polindrome = new Palindrome();
	}

	/**
	 * @test
	 * @group PalindromeTest
	 * @throws Exception
	 */
	public function testRunner()
	{
		$this->is_even_return_true_when_passed_22();
		$this->is_even_return_false_when_passed_21();
		$this->numLengthIsEven_return_false_when_passed_100();
		$this->numLengthIsEven_return_true_when_passed_10();
		$this->getNumberMedianDigitIndex_returns_1_when_given_100();
		$this->getNumberMedianDigitIndex_returns_minus_1_when_geven_10();
		$this->isPalUtil_check_if_a_even_length_number_is_a_palindrome();
		$this->isPalUtil_check_if_a_odd_length_number_is_a_palindrome();
		$this->isPal_throw_exception_on_negative_number();
		$this->isPal_pass();
		$this->isPal_fails();
		$this->findNextPalindrome_test();

	}

}