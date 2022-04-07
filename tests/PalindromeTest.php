<?php

use App\Palindrome;
use PHPUnit\Framework\TestCase;

/**
 * Class PalindromeTest
 */
class PalindromeTest extends TestCase
{
	protected Palindrome $polindrome;

	protected function setUp(): void
	{
		parent::setUp();
		$this->polindrome = new Palindrome();
	}

	/**
	 * @test
	 * @group PalindromeTest
	 *
	 * sequence: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 22, 33, 44, 55, 66, 77, 88, 99, 101, 111
	 */
	public function is_even_return_true_when_passed_22()
	{
		$this->assertEquals(true, $this->polindrome->isIntEven(22));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function is_even_return_false_when_passed_21()
	{

		$this->assertEquals(false, $this->polindrome->isIntEven(21));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function numLenghtIsEven_return_false_when_passed_100()
	{
		$this->assertEquals(false, $this->polindrome->numLenghtIsEven(100));
	}

	/**
	 * @test
	 * @group PalindromeTest
	 */
	public function numLenghtIsEven_return_true_when_passed_10()
	{
		$this->assertEquals(true, $this->polindrome->numLenghtIsEven(10));

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
	}

}