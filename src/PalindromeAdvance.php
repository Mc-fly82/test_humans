<?php /** @noinspection PhpMissingReturnTypeInspection */

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
use JetBrains\PhpStorm\Pure;
use function array_pop;
use function array_shift;
use function count;

class PalindromeAdvance extends PalindromeContract
{

	public Utils $utils;

	#[Pure] public function __construct()
	{
		$this->utils = new Utils();
	}

	/**
	 * @param $num
	 *
	 * @return bool
	 * @throws Exception
	 */
	public function isPal($num): bool
	{
		if ($num < 0) {
			throw new Exception("Non valide");
		}

		return $this->isPalUtil($num);

	}

	/**
	 * @param $num
	 *
	 * @throws Exception
	 */
	public function isPalUtil($num): bool
	{
		//serialize
		$state = $this->utils->numToArray($num); //base case

		while ( ! empty($state) && count($state) > 1) {
			//iterator
			$left  = array_pop($state);
			$right = array_shift($state);

			if ($left !== $right) {
				return false;
			}
		}

		return true;
	}

}