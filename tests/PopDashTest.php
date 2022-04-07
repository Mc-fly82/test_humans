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

	/**
	 * @test
	 * @group PopDashTest
	 */
	public function parse_returns_correct_sequence_when_passed_274()
	{
		$this->assertEquals("2-7-4", $this->popdash->parse(274));

	}

	/**
	 * @test
	 * @group PopDashTest
	 */
	public function parse_returns_correct_sequence_when_passed_1274()
	{
		$this->assertEquals("1-2-7-4", $this->popdash->parse(1274));

	}

	/**
	 * @test
	 * @group PopDashTest
	 */
	public function parse_returns_correct_sequence_when_passed_1275()
	{
		$this->assertEquals("1-7-48", $this->popdash->parse(1748));

	}

	/**
	 * @test
	 * @group PopDashTest
	 */
	public function parse_returns_empty_string_on_non_int()
	{
		$this->assertEquals("", $this->popdash->parse("1748"));
	}
}
