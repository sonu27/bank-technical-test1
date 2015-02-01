<?php

namespace AR\Bank;

class BankCard
{
    private $number;
    private $expiryDate;
    private $masker;

    public function __construct($number, \DateTime $expiryDate, $masker)
    {
        $this->number = $number;
        $this->expiryDate = $expiryDate;
        $this->masker = $masker;
    }

    public function getMaskedNumber($number)
    {
        return $this->masker->mask($number);
    }
}