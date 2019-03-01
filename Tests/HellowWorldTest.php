<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function setUp()
    {
        
    }

    public function tearDown()
    {
        
    }

    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld();

        $this->assertEquals('Hello World!', $helloWorld->hello());
    }
}
