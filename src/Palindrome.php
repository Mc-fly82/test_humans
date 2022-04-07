<?php

namespace App;

use Exception;
use function count;

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
	 */
	function getNumberMedianDigitPosition(int $num)
	{

		if ( ! $this->isEven($num)) {
			$arrayOfNum         = array_map('intval', str_split($num));
			$indexOfMedianDigit = floor(count($arrayOfNum) / 2);
			//	dd($indexOfMedianDigit);
		} else {
			// TODO: Marc Flavius - split into 2 array
		}

	}

	/**
	 * @param int $num
	 *
	 * @return bool
	 */
	public function numLenghtIsEven(int $num): bool
	{
		$num_length = strlen((string) $num);

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

}