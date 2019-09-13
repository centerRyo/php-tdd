<?php

namespace App\Money;

class Currency
{
    private $currency;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function equals($currency)
    {
        return $this->currency == $currency;
    }

    public function __toString()
    {
        return $this->currency;
    }
}
