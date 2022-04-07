<?php

namespace App;

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

	public function __construct($db)
	{

		$this->db = $db;
	}
}