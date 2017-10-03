<?php

require_once __DIR__ . '/TheClass.php';

class TheClassTest extends PHPUnit_Framework_TestCase {

	public function testSum() {
		$this->assertEquals( 3, TheClass::sum( 1, 2 ) );
	}

}