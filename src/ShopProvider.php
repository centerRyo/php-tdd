<?php

namespace App;

class ShopProvider
{
    private $time;

    public function __construct($time = null)
    {
        if (is_null($time)) {
            $time = date('H');
        }
        $this->time = $time;
    }
    // 毎回値を渡さなければならないため採用しなかった
    // public function __construct($time)
    // {
    //     $this->time = $time;
    // }

    public function call()
    {
        if ($this->isMorning()) {
            return new MorningShop();
        }

        if ($this->isLunch()) {
            return new LunchShop();
        }

        if ($this->isDinner()) {
            return new DinnerShop();
        }

        return new ClosedShop();
    }

    private function isMorning()
    {
        return ($this->time >= 5 && $this->time < 11);
    }

    private function isLunch()
    {
        return ($this->time >= 11 && $this->time < 17);
    }

    private function isDinner()
    {
        return ($this->time >= 17);
    }
}
