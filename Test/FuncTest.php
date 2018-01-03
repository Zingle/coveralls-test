<?php

namespace Test;
use PHPUnit_Framework_TestCase;

require_once dirname(__DIR__) . "/cover-test.php";

class FuncTest extends PHPUnit_Framework_TestCase
{
    public function testFunc1()
    {
        $this->assertEquals(7, func1(3, 4));
    }

    public function testFunc2()
    {
        $this->assertEquals(func2(2, 3), 8);
    }
}
