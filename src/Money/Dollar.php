<?php

namespace App\Money;

class Dollar
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $mutiplier)
    {
        $this->amount *= $mutiplier;
    }
}
