<?php

namespace App;

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

namespace App;

use App\Contracts\PalindromeContract;
use Exception;

class PalindromeAdvance implements PalindromeContract
{

	public Utils $utils;

	public function __construct()
	{
		$this->utils = new Utils();
	}

	public function findNearestPalindrome(int $num): int
	{


	}

	/**
	 * @param $num
	 *
	 * @return bool
	 * @throws Exception
	 */
	function isPal($num): bool
	{

	}
}