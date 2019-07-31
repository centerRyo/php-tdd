<?php

namespace App;

// PM5時からAM0時まではいらっしゃいませ、こんばんはと返す＋ディナーメニューで注文できる

class DinnerShop
{
    public function greet()
    {
        return 'いらっしゃいませ、こんばんは';
    }

    public function menu()
    {
        return 'ディナーメニュー';
    }

    public function order($menu)
    {
        if ($menu == 'ランチメニュー') {
            return false;
        }
        return true;
    }
}
