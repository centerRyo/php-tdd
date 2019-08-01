<?php

namespace App;

// AM5時からAM11時まではいらっしゃいませ、おはようございますと返す＋朝用メニューで注文できる

class MorningShop
{
    public function greet()
    {
        return 'いらっしゃいませ、おはようございます';
    }

    public function menu()
    {
        return 'モーニングメニュー';
    }

    public function order($menu)
    {
        if ($menu == 'モーニングメニュー') {
            return true;
        }
        return false;
    }
}
