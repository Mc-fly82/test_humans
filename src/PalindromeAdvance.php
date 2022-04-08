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

class PalindromeAdvance extends Palindrome implements PalindromeContract
{
	function isPalUtil(int $num): bool
	{

	}

}