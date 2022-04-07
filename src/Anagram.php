<?php

namespace App;

use function array_push;
use function sort;

/**
 * Class Anagram
 *
 * @package App
 *
 * * Troisième test : écrivez une fonction qui trouvera tous les anagrammes d'un mot à partir d'une liste. Vous recevrez deux entrées,
 * un mot et un tableau de mots. Vous devez retourner un tableau de tous les anagrammes ou un tableau vide s'il n'y en a pas.
 * exemples :
 *      getAnagrams('dbbd', ['ddbb', 'dbce', 'bbdd', 'vdvd']) => ['ddbb', 'bbdd']
 *      getAnagrams('uaceu', ['cuazeu', 'caueu', 'uacau', 'caeus', 'uaceu']) => ['uareu', 'uaceu']
 */
class Anagram
{

	protected Utils $utils;

	private $db;

	public function __construct(array $db)
	{
		$this->utils = new Utils();
		$this->db    = $db;
	}

	/**
	 * @param string $value
	 *
	 * @return array
	 */
	public function findInDb(string $value): array
	{
		$output_array = [];

		foreach ($this->db as $db_item) {
			if ($this->isAnagram($value, $db_item)) {
				array_push($output_array, $db_item);
			}
		}

		return [];
	}

	/**
	 * @param $value
	 * @param $db_item
	 *
	 * @return bool
	 */
	function isAnagram($value, $db_item): bool
	{

		$arrayStr     = $this->utils->stringToArray($value);
		$arrayOfDbStr = $this->utils->stringToArray($db_item);
		sort($arrayStr);
		sort($arrayOfDbStr);

		return $arrayOfDbStr === $arrayStr;
	}
}