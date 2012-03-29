<?php

class MainTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionTestWorkFine()
    {
        require_once '../public/test.php';
        $result = Main::test(true);
        $this->assertFalse($result);
    }
}