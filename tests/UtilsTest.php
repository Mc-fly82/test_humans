<?php

use App\Utils;
use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{

	protected Utils $utils;

	protected function setUp(): void
	{
		parent::setUp();
		$this->utils = new Utils();
	}
}