<?php

namespace AR\Bank;

class AmericanExpress extends BankCard
{

    public function __construct($number, \DateTime $expiryDate, \AR\MaskerInterface $masker)
    {
        $masker->setMaskCharacter('x');
        $masker->setUnmaskedIndexes([15, 16, 17]);
        $masker->setExcludedCharacters(['-']);

        parent::__construct($number, $expiryDate, $masker);
    }

}