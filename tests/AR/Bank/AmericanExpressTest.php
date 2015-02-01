<?php

class AmericanExpressTest extends PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new \AR\Bank\AmericanExpress(
            '3786-7334-8965-345',
            new DateTime(),
            new \AR\Masker('x')
        );
    }

    public function testGetMaskedCardNumber()
    {
        $expected = 'xxxx-xxxx-xxxx-345';

        $this->assertEquals($expected, $this->obj->getMaskedNumber());
    }

}
