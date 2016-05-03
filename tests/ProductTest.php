<?php

class ProductTest extends PHPUnit_Framework_TestCase
{
        protected function setUp() {
            $this->product = new Project\Product;
        }

	public function testIsAvailableIsTrue() {
		$this->assertTrue($this->product->isAvailable());
	}

        public function testIsAvailableIsFalse() {
		$this->assertFalse($this->product->isAvailable());
	}
}

