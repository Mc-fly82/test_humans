<?php

namespace App;

use Exception;

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

	/**
	 * @param array $arrayOfNum
	 *
	 * @return int
	 * @throws Exception
	 */
	public function arrayToNum(array $arrayOfNum): int
	{
		foreach ($arrayOfNum as $item) {
			if ( ! is_numeric($item)) {
				throw new Exception("can't convert array to number, all element are not numbers");
			}
		}

		return (int) join("", $arrayOfNum);
	}
}