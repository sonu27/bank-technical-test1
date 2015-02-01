<?php

class MaskerTest extends PHPUnit_Framework_TestCase {
    private $obj;

    protected function setUp()
    {
        $this->obj = new \AR\Masker('x', [0, 1], ['-']);
    }

    public function testMask()
    {
        $number     = '5601-2345-3446-5678';
        $expected   = '56xx-xxxx-xxxx-xxxx';

        $this->assertEquals($expected, $this->obj->mask($number));
    }
}
