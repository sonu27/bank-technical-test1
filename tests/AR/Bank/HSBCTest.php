<?php

class HSBCTest extends PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new \AR\Bank\HSBC(
            '5601-2345-3446-5678',
            new DateTime(),
            new \AR\Masker('x')
        );
    }

    public function testGetMaskedCardNumber()
    {
        $number     = '5601-2345-3446-5678';
        $expected   = '56xx-xxxx-xxxx-xxxx';

        $this->assertEquals($expected, $this->obj->getMaskedNumber($number));
    }

}
