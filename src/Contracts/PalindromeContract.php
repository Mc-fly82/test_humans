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
interface PalindromeContract
{

	/**
	 * @param $num
	 *
	 * @return bool
	 * @throws Exception
	 */
	function isPal($num): bool;


	/**
	 * @param int $num
	 *
	 * @return int
	 * @throws Exception
	 * trouve le plus proche Palindrome avec une préférence pour le Palindrome supérieur à la valeur de départ si les deux deltas (sup et inf) sont égaux
	 *
	 */
	public function findNearestPalindrome(int $num): int;
}