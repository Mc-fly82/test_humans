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
	public function parse_returns_good_sequence_when_passed_4615()
	{
		$this->assertEquals("46-1-5", $this->popdash->parse(4615));
	}
}
