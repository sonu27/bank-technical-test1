<?php

namespace AR\Bank;

interface BankInterface {
    public function getMaskedCardNumber($number);

}