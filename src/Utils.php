<?php

namespace App;

class Utils
{

	/**
	 * @param int $num
	 *
	 * @return array
	 */
	public static function numToArray(int $num): array
	{
		return array_map('intval', str_split($num));
	}

	/**
	 * @param $num
	 *
	 * @return bool
	 */
	public function isIntEven($num): bool
	{
		return ($num % 2) === 0;
	}

	/**
	 * @param int $num
	 *
	 * @return int
	 */
	public function getIntLength(int $num): int
	{
		return strlen((string) $num);
	}
}