<?php

namespace AR\Bank;

class HSBC implements BankInterface
{
    private $cardNumberLengthWithDashes = 19;
    private $unmaskedLengths = [0, 1];

    public function getMaskedCardNumber($number)
    {

        $numberArray = str_split($number);
        foreach ($numberArray as $k => $v) {
            if (!in_array($k, $this->unmaskedLengths) && is_numeric($v)) {
                $numberArray[$k] = 'x';
            }
        }

        return implode('',$numberArray);
    }

}