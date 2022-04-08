<?php

use App\Anagram;
use PHPUnit\Framework\TestCase;

class AnagramTest extends TestCase
{

	/**
	 * @var string[]
	 */
	protected array $db1;

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

}