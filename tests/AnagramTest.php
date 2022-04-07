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

}