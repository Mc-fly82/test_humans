<?php

use App\Anagram;
use App\TestUtils;
use PHPUnit\Framework\TestCase;

class AnagramTest extends TestCase
{
	use TestUtils;

	/**
	 * @var string[]
	 */
	protected array $db1;

	/**
	 * @var string[]
	 */
	protected array $db2;

	protected function setUp(): void
	{
		parent::setUp();
		$this->db1 = [
			'ddbb',
			'dbce',
			'bbdd',
			'vdvd',
		];

		$this->db2 = [
			'cuazeu',
			'caueu',
			'uacau',
			'caeus',
			'uaceu',
		];

	}

	/**
	 * @test
	 * @group AnagramTest
	 */
	public function findInDb_returns_true_if_presented_whit_a_anagram_match()
	{
		//stub out db
		$this->assertTrue((new Anagram([]))->isAnagram("dbbd", "ddbb"));
	}

	/**
	 * @test
	 * @group AnagramTest
	 */
	public function findInDb_returns_false_if_presented_whit_a_anagram_match()
	{
		//stub out db
		$this->assertFalse((new Anagram([]))->isAnagram("dbbd", "cccc"));
	}

	/**
	 * @test
	 * @group AnagramTest
	 */
	public function findInDb_returns_the_expected_list_of_anagrams_in_db1()
	{
		$outputDb1 = [
			'ddbb',
			'bbdd',
		];
		$this->assertArraySimilar($outputDb1, (new Anagram($this->db1))->findInDb("dbbd"));
	}

	/**
	 * @test
	 * @group AnagramTest
	 */
	public function findInDb_returns_the_expected_list_of_anagrams_in_db2()
	{
		$outputDb2 = [
			'uaceu',
			'caueu',
		];
		$assert    = (new Anagram($this->db2))->findInDb("uaceu");

		$this->assertArraySimilar($outputDb2, $assert);
	}

}