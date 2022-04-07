<?php

namespace App;

use Exception;

/**
 * Class Palindrome
 *
 * @package App
 *
 *  * Premier test : rédigez une fonction qui retourne le plus proche palindrome du chiffre donné
 * Si le chiffre donné n'est pas un entier ou est  en dessous de 0, la fonction retournera "Non valide"
 * exemples :
 *      getPalindrome(8) => 11
 *      getPalindrome(1029) => 1001
 *
 */
class Palindrome
{

	function isPalUtil(int $num)
	{


	}

	/**
	 * @param $num
	 *
	 * @throws Exception
	 */
	function isPal($num)
	{
		if ($num < 0) {
			throw new Exception("Non valide");
		}

		return $this->isPalUtil($num);
	}

	/**
	 * @param array $num
	 *
	 * find the median digit position in int
	 * if not found return -1
	 *
	 */
	function getNumberMedianDigitIndex(int $num)
	{
		$num_length = $this->getStrlen($num);

		if ( ! $this->numLenghtIsEven($num)) {
			return floor($num_length / 2);
		}

		return -1;

	}

	/**
	 * @param int $num
	 *
	 * @return bool
	 */
	public function numLenghtIsEven(int $num): bool
	{
		$num_length = $this->getStrlen($num);

		return ($num_length % 2) === 0;
	}

	/**
	 * @param $num
	 *
	 * @return bool
	 */
	function isEven($num): bool
	{
		return ($num % 2) === 0;
	}

	/**
	 * @param int $num
	 *
	 * @return int
	 */
	private function getStrlen(int $num): int
	{
		return strlen((string) $num);
	}

	/**
	 * @param int $num
	 *
	 * @return array
	 */
	private function stringToArray(int $num): array
	{
		return array_map('intval', str_split($num));
	}

	/**
	 */
	private function splitEvenArrayInHalf(array $arrayOfNum): object
	{
		$firstHalf  = array_slice($arrayOfNum, 0, count($arrayOfNum) / 2);
		$secondHalf = array_slice($arrayOfNum, count($arrayOfNum) / 2);

		return (object) [
			"firstHalf"  => $firstHalf,
			"secondHalf" => $secondHalf,
		];
	}

}