<?php

namespace App\Money;

class Franc extends Money
{
    // private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(Money $franc)
    {
        return $this->amount == $franc->amount;
    }
}
