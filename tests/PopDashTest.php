<?php

use App\PopDash;
use PHPUnit\Framework\TestCase;

/**
 * Class PopDashTest
 */
class PopDashTest extends TestCase
{
	protected PopDash $popdash;

	protected function setUp(): void
	{
		parent::setUp();
		$this->popdash = new PopDash();
	}

	/**
	 * @test
	 * @group PopDashTest
	 */
	public function test()
	{
		$this->assertEquals("434", $this->popdash->parse(434));
	}
}
