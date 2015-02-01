<?php

namespace AR\Bank;

class HSBC extends BankCard
{

    public function __construct($number, \DateTime $expiryDate, \AR\Masker $masker)
    {
        $masker->setMaskCharacter('x');
        $masker->setUnmaskedIndexes([0, 1]);
        $masker->setExcludedCharacters(['-']);

        parent::__construct($number, $expiryDate, $masker);
    }

}