<?php

namespace App\Money;

class Money
{
    protected $amount;

    public function equals(Money $dollar)
    {
        return $this->amount == $dollar->amount;
    }
}
