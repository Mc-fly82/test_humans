<?php

namespace App;

/**
 * Class Palindrome
 *
 * @package App
 *
 * Second test : nous avons une variable n
 * Si n est un nombre entier, retourner une chaine de caractères avec des tirets '-' avant et après chaque nombre entier impair,
 * mais ne pas commencer ou terminer la chaîne par un tiret.
 * Si n est négatif, le signe négatif doit être supprimé.
 * Si n n'est pas un entier, retourner une valeur vide :
 * exemples :
 *      popDash(274) => '2-7-4'
 *      popDash(4615) => '46-1-5' *
 */
class PopDash
{
	/**
	 * @param string $val
	 *
	 * @return string
	 */
	public function parse(int $val): string
	{

		return (string) $val;
	}
}