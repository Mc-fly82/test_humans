<?php

namespace App;

use function array_push;

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

	private $db;

	public function __construct(array $db)
	{

		$this->db = $db;
	}

	/**
	 * @param string $string
	 *
	 * @return array
	 */
	public function findInDb(string $string): array
	{
		$output_array = [];

		foreach ($this->db as $item) {
			if ($this->isAnagram($item)) {
				array_push($output_array, $item);
			}
		}

		return [];
	}

	/**
	 * @param $item
	 *
	 * @return bool
	 */
	private function isAnagram($item): bool
	{
		return true;
	}
}