<?php

namespace App\Money;

use App\Money\Money;

class Bank
{
    public function reduce(): Money
    {
        return Money::dollar(10);
    }
}
