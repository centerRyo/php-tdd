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
}
