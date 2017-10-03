<?php

require_once __DIR__ . '/TheClass.php';

use PHPUnit\Framework\TestCase;

class TheClassTest extends TestCase {

	public function testSum() {
		$this->assertEquals( 3, TheClass::sum( 1, 2 ) );
	}

}