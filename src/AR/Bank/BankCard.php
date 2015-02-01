<?php

namespace AR\Bank;

class BankCard
{
    private $number;
    private $expiryDate;
    private $masker;

    public function __construct($number, \DateTime $expiryDate, \AR\MaskerInterface $masker)
    {
        $this->number     = $number;
        $this->expiryDate = $expiryDate;
        $this->masker     = $masker;
    }

    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    final public function getMaskedNumber()
    {
        return $this->masker->mask($this->number);
    }
}