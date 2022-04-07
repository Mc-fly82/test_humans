<?php

namespace App;

use function abs;
use function count;
use function is_int;
use function trim;

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
	protected Utils $utils;

	public function __construct()
	{
		$this->utils = new Utils();
	}

	/**
	 *
	 * @param $value
	 *
	 * @return string
	 */
	public function parse($value): string
	{
		if ( ! is_int($value)) {
			return "";
		}
		//sanitize
		$value = abs($value);

		//setup output object
		$output = "";

		//serialize value
		$array = $this->utils->numToArray($value);

		foreach ($array as $key => $currentValue) {

			if ( ! $this->utils->isIntEven($currentValue)) {
				$output .= $this->printOddNumber($currentValue);
			} else {
				$output .= $this->printEvenNumber($currentValue);
			}
		}

		return $this->stripeDuplicate($output);
	}

	/**
	 * @param $currentValue
	 *
	 * @return mixed
	 */
	private function printEvenNumber($currentValue)
	{
		return $currentValue;
	}

	/**
	 * @param $currentValue
	 *
	 * @return string
	 */
	private function printOddNumber($currentValue): string
	{
		return "-".$currentValue."-";
	}

	/**
	 * @param string $value
	 *
	 * @return string
	 */
	private function stripeDuplicate(string $value): string
	{

		$array  = $this->utils->stringToArray($value);
		$old    = "";
		$output = "";

		foreach ($array as $key => $item) {
			$isLastLoop          = count($array) - 1 === $key;
			$isDuplicateSequence = $old !== $item;

			if ($isDuplicateSequence) {
				$output .= $item;
			}

			if ($isLastLoop) {
				$output = trim($output, "-");
			}

			$old = $item;
		}

		return $output;
	}
}