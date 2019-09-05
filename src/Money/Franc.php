<?php

namespace App\Money;

class Franc extends Money
{
    private $currency;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'CHF';
    }

    public function times(int $multiplier): Money
    {
        return new self($this->amount * $multiplier);
    }

    public function currency(): String
    {
        return $this->currency;
    }
}
