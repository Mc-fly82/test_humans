<?php

use App\NarcissisticNumbers;
use PHPUnit\Framework\TestCase;

/**
 * Quatrième test : Un nombre narcissique est un nombre positif qui est la somme de ses propres chiffres,
 * chacun élevé à la puissance du nombre de chiffres dans une base donnée. Dans ce Kata, nous nous limiterons aux nombres décimaux (base 10).
 * exemple : prenons 153 (3 chiffres), qui est narcissique :
 * 1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153
 * et 1652 (4 chiffres), qui ne l'est pas :
 * 1^4 + 6^4 + 5^4 + 2^4 = 1 + 1296 + 625 + 16 = 1938
 * Votre code doit renvoyer true ou false selon que le nombre donné est un nombre narcissique ou non.
 *
 */
class NarcissisticNumbersTest extends TestCase
{

	protected NarcissisticNumbers $narcissistic;

	protected function setUp(): void
	{
		parent::setUp();

		$this->narcissistic = new NarcissisticNumbers();
	}

	/**
	 * @test
	 * @group NarcissisticNumbersTest
	 */
	public function isNarcissistic_returns_true_if_num_is_narcissistic()
	{
		// 1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153

		$this->assertTrue($this->narcissistic->isNarcissistic(153));
	}

	/**
	 * @test
	 * @group NarcissisticNumbersTest
	 */
	public function isNarcissistic_returns_false_if_num_is_not_narcissistic()
	{
		//  1^4 + 6^4 + 5^4 + 2^4 = 1 + 1296 + 625 + 16 = 1938

		$this->assertFalse($this->narcissistic->isNarcissistic(1938));
	}
}

