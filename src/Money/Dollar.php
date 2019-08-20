<?php

namespace App\Money;

class Dollar
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $mutiplier)
    {
        return new self($this->amount * $mutiplier); // return new Dollar($this->amount * $mutiplier);
    }

    public function equals($dollar)
    {
        return $this->amount == $dollar->amount;
    }
}
