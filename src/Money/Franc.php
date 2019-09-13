<?php

namespace App\Money;

class Franc extends Money
{
    protected $currency;

    public function __construct(int $amount, String $currency)
    {
        parent::__construct($amount, $currency);
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return new self($this->amount * $multiplier, $this->currency);
    }

    public function currency(): Currency
    {
        // return $this->currency;
        return parent::currency();
    }
}
