<?php

namespace App\Money;

class Dollar extends Money
{
    protected $currency;

    public function __construct(int $amount, String $currency)
    {
        parent::__construct($amount, $currency);
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function currency(): Currency
    {
        // return $this->currency;
        return parent::currency();
    }
}
