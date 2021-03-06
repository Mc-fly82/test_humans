<?php

namespace App\Test;

use App\Contracts\PalindromeContract;
use App\Palindrome;
use Exception;

/**
 * Class PalindromeTest
 * sequence: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 22, 33, 44, 55, 66, 77, 88, 99, 101, 111
 */
trait PalindromeTester
{
	protected PalindromeContract $polindrome;



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