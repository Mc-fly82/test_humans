<?php

namespace App;

use Exception;
use function array_reverse;
use function count;
use function join;

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

	/**
	 * @param int $num
	 *
	 * @return bool
	 * @throws Exception
	 */
	function isPalUtil(int $num): bool
	{
		$arrayOfNum = $this->stringToArray($num);
		if ($this->numLenghtIsEven($num)) {
			$evenSplit = $this->splitEvenArrayInHalf($arrayOfNum);

			return ($evenSplit->firstHalf == array_reverse($evenSplit->secondHalf));
		}

		$oddSplit = $this->splitOddArrayInHalf($arrayOfNum);

		return ($oddSplit->firstHalf == array_reverse($oddSplit->secondHalf));

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
			return (int) floor($num_length / 2);
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
	function isIntEven($num): bool
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
	 * split a even length array in haft
	 *
	 * @throws Exception
	 */
	private function splitEvenArrayInHalf(array $arrayOfNum): object
	{
		if ( ! $this->isIntEven(count($arrayOfNum))) {
			throw new Exception("Array is odd, please pass a even length array");
		}

		$firstHalf  = array_slice($arrayOfNum, 0, count($arrayOfNum) / 2);
		$secondHalf = array_slice($arrayOfNum, count($arrayOfNum) / 2);

		return (object) [
			"firstHalf"  => $firstHalf,
			"secondHalf" => $secondHalf,
		];
	}

	/**
	 * @throws Exception
	 */
	private function splitOddArrayInHalf(array $arrayOfNum): object
	{
		if ($this->isIntEven(count($arrayOfNum))) {
			throw new Exception("Array is even, please pass a odd length array");
		}

		$index = $this->getNumberMedianDigitIndex((int) join("", $arrayOfNum));

		unset($arrayOfNum[ $index ]);

		$firstHalf  = array_slice($arrayOfNum, 0, count($arrayOfNum) / 2);
		$secondHalf = array_slice($arrayOfNum, count($arrayOfNum) / 2);

		return (object) [
			"firstHalf"  => $firstHalf,
			"secondHalf" => $secondHalf,
		];
	}

}