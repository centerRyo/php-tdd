<?php

namespace App\Money;

class Dollar extends Money
{
    private $currency;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'USD';
    }

    public function times(int $mutiplier): Money
    {
        return new self($this->amount * $mutiplier); // return new Dollar($this->amount * $mutiplier);
    }

    public function currency(): String
    {
        return $this->currency;
    }
}
