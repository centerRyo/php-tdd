<?php

namespace App\Money;

class Money
{
    protected $amount;

    public function equals(Money $money)
    {
        return $this->amount == $money->amount;
    }
}
