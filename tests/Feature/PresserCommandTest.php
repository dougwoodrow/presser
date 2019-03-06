<?php

namespace Tests\Feature;

use Tests\TestCase;

class PresserCommandTest extends TestCase {
	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testPresserCommand() {
		$this->artisan( 'presser' )
		     ->expectsOutput( 'Simplicity is the ultimate sophistication.' )
		     ->assertExitCode( 0 );
	}
}
