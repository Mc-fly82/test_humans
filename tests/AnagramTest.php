<?php

use App\Anagram;
use PHPUnit\Framework\TestCase;

class AnagramTest extends TestCase
{
	protected Anagram $anagram;

	/**
	 * @test
	 * @group AnagramTest
	 */
	public function findInDb()
	{

	}

	protected function setUp(): void
	{
		$db = [
			'ddbb',
			'dbce',
			'bbdd',
			'vdvd',
		];

		parent::setUp();
		$this->anagram = new Anagram($db);
	}

}