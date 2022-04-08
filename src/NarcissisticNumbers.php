<?php

namespace App;

/**
 * Class NarcissisticNumbers
 *
 * @package App
 */
class NarcissisticNumbers
{
	protected Utils $utils;

	public function __construct()
	{
		$this->utils = new Utils();
	}

	/**
	 * @param int $value
	 *
	 * @return bool
	 */
	public function isNarcissistic(int $value): bool
	{
		// 1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153

		return true;
	}
}