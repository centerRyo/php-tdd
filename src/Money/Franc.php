<?php

namespace App\Money;

class Franc
{
    private $amount;

    public function ___construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times()
    {
        return new self($this->amount * 2);
    }
}