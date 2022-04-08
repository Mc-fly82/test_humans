<?php

namespace App\Test;

use App\Palindrome;
use Exception;

/**
 * Class PalindromeTest
 * sequence: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 22, 33, 44, 55, 66, 77, 88, 99, 101, 111
 */
trait PalindromeTester
{
	protected Palindrome $polindrome;

	/**
	 * @test
	 * @group PalindromeTest
	 *
	 */
	public function is_even_return_true_when_passed_22()
	{
		$this->assertEquals(true, $this->polindrome->utils->isIntEven(22));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function is_even_return_false_when_passed_21()
	{

		$this->assertEquals(false, $this->polindrome->utils->isIntEven(21));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function numLengthIsEven_return_false_when_passed_100()
	{
		$this->assertFalse($this->polindrome->numLengthIsEven(100));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function numLengthIsEven_return_true_when_passed_10()
	{
		$this->assertTrue($this->polindrome->numLengthIsEven(10));

	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function getNumberMedianDigitIndex_returns_1_when_given_100()
	{
		$this->assertEquals(1, $this->polindrome->getNumberMedianDigitIndex(100));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function getNumberMedianDigitIndex_returns_minus_1_when_geven_10()
	{
		$this->assertEquals(-1, $this->polindrome->getNumberMedianDigitIndex(10));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 * @throws Exception
	 */
	public function isPalUtil_check_if_a_even_length_number_is_a_palindrome()
	{
		$this->assertTrue($this->polindrome->isPalUtil(1001));
		$this->assertTrue($this->polindrome->isPalUtil(1221));

	}

	/**
	 * @test
	 * @group PalindromeTest
	 * @throws Exception
	 */
	public function isPalUtil_check_if_a_odd_length_number_is_a_palindrome()
	{
		$this->assertTrue($this->polindrome->isPalUtil(111));
		$this->assertTrue($this->polindrome->isPalUtil(22622));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 * @throws Exception
	 */
	public function isPal_throw_exception_on_negative_number()
	{
		$this->expectException(Exception::class);
		$this->polindrome->isPal(-1);
	}

	/**
	 * @test
	 * @group PalindromeTest
	 * @throws Exception
	 */
	public function isPal_pass()
	{
		$this->assertTrue($this->polindrome->isPal(111));
		$this->assertTrue($this->polindrome->isPal(1221));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function isPal_fails()
	{
		$this->assertFalse($this->polindrome->isPal(113));
		$this->assertFalse($this->polindrome->isPal(4221));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 * @throws Exception
	 */
	public function findNextPalindrome_test()
	{
		$this->assertEquals(9, $this->polindrome->findNearestPalindrome(8));
		$this->assertEquals(1001, $this->polindrome->findNearestPalindrome(1029));
	}

}