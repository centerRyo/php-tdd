<?php

namespace App\Money;

class Franc
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return new self($this->amount * $multiplier);
    }

    public function equals($franc)
    {
        return $this->amount == $franc->amount;
    }
}
