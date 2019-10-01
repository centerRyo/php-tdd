<?php

namespace App\Money;

use App\Money\Money;
use App\Money\Expression;

class Sum implements Expression
{
    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(String $to): Money
    {
        $amount = $this->augend->amount + $this->addend->amount;
        return new Money($amount, $to);
    }
}
