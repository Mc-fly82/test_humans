<?php

namespace App;

use Exception;
use function array_reverse;
use function count;
use function is_null;

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
	protected Utils $utils;

	public function __construct()
	{
		$this->utils = new Utils();
	}

	/**
	 * @param int $num
	 *
	 * @return bool
	 * @throws Exception
	 */
	function isPalUtil(int $num): bool
	{
		$arrayOfNum = $this->utils->numToArray($num);
		if ($this->numLengthIsEven($num)) {
			$evenSplit = $this->splitEvenArrayInHalf($arrayOfNum);

			return ($evenSplit->firstHalf == array_reverse($evenSplit->secondHalf));
		}

		$oddSplit = $this->splitOddArrayInHalf($arrayOfNum);

		return ($oddSplit->firstHalf == array_reverse($oddSplit->secondHalf));

	}

	/**
	 * @param $num
	 *
	 * @return bool
	 * @throws Exception
	 */
	function isPal($num): bool
	{
		if ($num < 0) {
			throw new Exception("Non valide");
		}

		return $this->isPalUtil($num);
	}

	/**
	 * @param int $num
	 *
	 * find the median digit position in int
	 * if not found return -1
	 *
	 * @return int
	 */
	function getNumberMedianDigitIndex(int $num): int
	{
		$num_length = $this->utils->getIntLength($num);

		if ( ! $this->numLengthIsEven($num)) {
			return (int) floor($num_length / 2);
		}

		return -1;

	}

	/**
	 * @param int $num
	 *
	 * @return bool
	 */
	public function numLengthIsEven(int $num): bool
	{
		$num_length = $this->utils->getIntLength($num);

		return ($num_length % 2) === 0;
	}

	/**
	 * split a even length array in haft
	 *
	 * @throws Exception
	 */
	private function splitEvenArrayInHalf(array $arrayOfNum): object
	{
		if ( ! $this->utils->isIntEven(count($arrayOfNum))) {
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
		if ($this->utils->isIntEven(count($arrayOfNum))) {
			throw new Exception("Array is even, please pass a odd length array");
		}

		$index = $this->getNumberMedianDigitIndex($this->utils->arrayToNum($arrayOfNum));

		unset($arrayOfNum[ $index ]);

		$firstHalf  = array_slice($arrayOfNum, 0, count($arrayOfNum) / 2);
		$secondHalf = array_slice($arrayOfNum, count($arrayOfNum) / 2);

		return (object) [
			"firstHalf"  => $firstHalf,
			"secondHalf" => $secondHalf,
		];
	}

	/**
	 * @param int $num
	 *
	 * @return int
	 * @throws Exception
	 * trouve le plus proche Palindrome avec une préférence pour le Palindrome supérieur à la valeur de départ si les deux deltas (sup et inf) sont égaux
	 *
	 */
	public function findNearestPalindrome(int $num): int
	{
		$findUpperBound = null;
		$findLowerBound = null;
		$upCount        = $num;
		$downCount      = $num;

		while (is_null($findLowerBound) || is_null($findUpperBound)) {

			// handle up tick
			if (is_null($findUpperBound)) {
				$upCount++;
			}

			// handle down tick
			if (is_null($findLowerBound) && ! $downCount <= 0) {
				$downCount--;
			}

			//handle set upper bound
			if ($this->isPalUtil($upCount)) {
				$findUpperBound = $upCount;
			}

			//handle set lower bound
			if ($this->isPalUtil($downCount)) {
				$findLowerBound = $downCount;
			}
		}

		//after loop
		$lowDelta  = $num - $findLowerBound;
		$highDelta = $findUpperBound - $num;

		// determine the lowest delta
		if ($highDelta > $lowDelta) {
			return $findLowerBound;
		}

		return $findUpperBound;
	}

}