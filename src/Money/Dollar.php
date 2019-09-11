<?php

namespace App\Money;

class Dollar extends Money
{
    protected $currency;

    public function __construct(int $amount, String $currency)
    {
        parent::__construct($amount, $currency);
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $mutiplier): Money
    {
        return new self($this->amount * $mutiplier, $this->currency); // return new Dollar($this->amount * $mutiplier);
    }

    public function currency(): String
    {
        return $this->currency;
    }
}
