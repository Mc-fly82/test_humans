<?php

namespace App\Contracts;

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
abstract class PalindromeContract
{

	/**
	 * @param int $num
	 *
	 * @return bool
	 * @throws Exception
	 */
	abstract public function isPal(int $num): bool;

	abstract public function isPalUtil(int $num);

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
			if ($this->isPal($upCount)) {
				$findUpperBound = $upCount;
			}

			//handle set lower bound
			if ($this->isPal($downCount)) {
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