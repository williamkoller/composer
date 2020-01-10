<?php

namespace App\Dev;

use PHPUnit_Framework_TestCase;

class HelloPackageTest extends PHPUnit_Framework_TestCase
{
    public function testGetHello()
    {
        $hello = new HelloPackage();
        $string = $hello->getHello();
        $this->assertNotNull($string);
        $this->assertInternalType('string', $string);
        $this->assertNotEquals(0, strlen($string));
    }
}
