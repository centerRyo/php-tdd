<?php

namespace Tests;

use Tests\TestCase;
use App\DinnerShop;

class DinnerShopTest extends TestCase
{
    /** @test */
    public function 挨拶したらいらっしゃいませ、こんばんはと返す()
    {
        $dinner_shop = new DinnerShop();
        $this->assertEquals('いらっしゃいませ、こんばんは', $dinner_shop->greet());
    }

    /** @test */
    public function メニューをとったらディナーメニューである()
    {
        $dinner_shop = new DinnerShop();
        $this->assertEquals('ディナーメニュー', $dinner_shop->menu());
    }

    /** @test */
    public function ディナーメニューで注文できる()
    {
        $dinner_shop = new DinnerShop();
        $this->assertTrue($dinner_shop->order('ディナーメニュー'));
    }

    /** @test */
    public function ランチメニューでは注文できない()
    {
        $dinner_shop = new DinnerShop();
        $this->assertFalse($dinner_shop->order('ランチメニュー'));
    }
}
