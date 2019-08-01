<?php

namespace App;

// AM11時からPM5時まではいらっしゃいませ、こんにちはと返す＋ランチメニューで注文できる

class LunchShop
{
    public function greet()
    {
        return 'いらっしゃいませ、こんにちは';
    }

    public function menu()
    {
        return 'ランチメニュー';
    }

    public function order($menu)
    {
        if ($menu == 'ランチメニュー') {
            return true;
        }
        return false;
    }
}
