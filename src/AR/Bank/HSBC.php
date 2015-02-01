<?php

namespace AR\Bank;

use AR\MaskerInterface;

class HSBC extends BankCard
{

    public function __construct($number, \DateTime $expiryDate, MaskerInterface $masker)
    {
        $masker->setMaskCharacter('x');
        $masker->setUnmaskedIndexes([0, 1]);
        $masker->setExcludedCharacters(['-']);

        parent::__construct($number, $expiryDate, $masker);
    }

}