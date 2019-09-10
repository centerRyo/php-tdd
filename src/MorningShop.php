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
        return 'モーニングメニューです';
    }

    public function order($menu)
    {
        if ($menu == 'モーニングメニュー') {
            echo 'メニューはこちらです';
        } else {
            echo $menu . 'は、ただいまの時間は扱っていません';
        }
    }
}
