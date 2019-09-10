<?php

namespace App\Money;

class Franc extends Money
{
    private $currency;

    public function __construct(int $amount, String $currency)
    {
        parent::__construct();
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, null);
    }

    public function currency(): String
    {
        return $this->currency;
    }
}
