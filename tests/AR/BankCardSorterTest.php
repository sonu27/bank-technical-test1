<?php

class BankCardSorterTest extends PHPUnit_Framework_TestCase
{
    public function testSortByDate()
    {
        $array = [
            new \AR\Bank\AmericanExpress(
                '3786-7334-8965-345',
                new DateTime('2015-09-27'),
                new \AR\Masker('x')
            ),
            new \AR\Bank\AmericanExpress(
                '3786-7334-8965-345',
                new DateTime('2015-03-27'),
                new \AR\Masker('x')
            ),
            new \AR\Bank\AmericanExpress(
                '3786-7334-8965-345',
                new DateTime('2016-02-27'),
                new \AR\Masker('x')
            ),
            new \AR\Bank\AmericanExpress(
                '3786-7334-8965-345',
                new DateTime('2015-12-27'),
                new \AR\Masker('x')
            ),
        ];

        $expectedArray = [
            new \AR\Bank\AmericanExpress(
                '3786-7334-8965-345',
                new DateTime('2016-02-27'),
                new \AR\Masker('x')
            ),
            new \AR\Bank\AmericanExpress(
                '3786-7334-8965-345',
                new DateTime('2015-12-27'),
                new \AR\Masker('x')
            ),
            new \AR\Bank\AmericanExpress(
                '3786-7334-8965-345',
                new DateTime('2015-09-27'),
                new \AR\Masker('x')
            ),
            new \AR\Bank\AmericanExpress(
                '3786-7334-8965-345',
                new DateTime('2015-03-27'),
                new \AR\Masker('x')
            ),
        ];

        $sorter = new \AR\BankCardSorter();

        $this->assertEquals($expectedArray, $sorter->getByDateDesc($array));
    }
}
