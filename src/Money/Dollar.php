<?php

namespace App\Money;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $mutiplier): Money
    {
        return new self($this->amount * $mutiplier); // return new Dollar($this->amount * $mutiplier);
    }

    public function currency(): String
    {
        return 'USD';
    }
}
