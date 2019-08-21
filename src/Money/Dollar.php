<?php

namespace App\Money;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $mutiplier)
    {
        return new self($this->amount * $mutiplier); // return new Dollar($this->amount * $mutiplier);
    }
}
