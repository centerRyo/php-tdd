<?php

namespace App;

class ShopProvider
{
    private $time;

    public function __construct($time = 0)
    {
        $this->time = $time;
    }

    public function call()
    {
        if ($this->time >= 5 && $this->time < 11) {
            return 'おはようございます';
        }

        if ($this->time >= 17) {
            return new DinnerShop();
        }

        if ($this->time >= 11 && $this->time <= 17) {
            return 'こんにちは';
        }
        return '';
    }
}