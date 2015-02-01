<?php

namespace AR;

class BankCardSorter
{

    public function getByDateDesc(array $array)
    {
        usort($array, function ($a, $b) {
            if ($a->getExpiryDate() == $b->getExpiryDate()) {
                return 0;
            }

            return ($a->getExpiryDate() > $b->getExpiryDate()) ? -1 : 1;
        });

        return $array;
    }

}