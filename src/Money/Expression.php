<?php

namespace App\Money;

interface Expression
{
    public function reduce(String $to): Money;
}
