<?php

class HSBCTest extends PHPUnit_Framework_TestCase
{
    private $obj;
    protected function setUp()
    {
        $this->obj = new \AR\Bank\HSBC();
    }

    public function testGetMaskedCardNumber()
    {
        $number = '5601-2345-3446-5678';
        $expected = '56xx-xxxx-xxxx-xxxx';

        $this->assertEquals($expected, $this->obj->getMaskedCardNumber($number));
    }

}
