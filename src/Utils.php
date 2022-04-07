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
}