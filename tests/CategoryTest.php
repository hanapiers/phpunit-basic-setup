<?php

class CategoryTest extends PHPUnit_Framework_TestCase
{
        protected function setUp() {
            $this->category = new Project\Category;
        }

	public function testIsAvailableIsBaz() {
		$this->assertEquals($this->category->getName(), 'baz');
	}

        public function testIsAvailableIsFoo() {
		$this->assertEquals($this->category->getName(), 'foo');
	}
}

