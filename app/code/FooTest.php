<?php

include('Foo.php');

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    /**
     * PHPUnit testing with assertEquals
     * @return void
     */
    public function testTellName()
    {
        // create the class object
        $mockObj = $this->getMockBuilder(Foo::class)
            ->disableOriginalConstructor()
            ->setMethods(null)
            ->getMock();
        // get the object function result by passing the method parameter value
        // pass different parameter value to get an invalid result
        $result = $mockObj->tellName('John');
        // validate the result with assertEquals()
        $this->assertEquals('Hi John', $result);
    }
}
