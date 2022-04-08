<?php

namespace App;

use function array_push;
use function array_reduce;
use function count;

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

		$arrayNum    = $this->utils->numToArray($value);
		$arrayLength = count($arrayNum);
		$store       = [];

		foreach ($arrayNum as $item) {
			array_push($store, pow($item, $arrayLength));
		}

		$callback = function ($a, $b) {
			return $a + $b;
		};

		$result = array_reduce($store, $callback);

		return $result === $value;
	}
}