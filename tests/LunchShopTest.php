<?php

namespace Tests;

use Tests\TestCase;
use App\LunchShop;

class LunchShopTest extends TestCase
{
    /** @test */
    public function 挨拶したらいらっしゃいませ、こんにちはと返す()
    {
        $lunch_shop = new LunchShop();
        $this->assertEquals('いらっしゃいませ、こんにちは', $lunch_shop->greet());
    }

    /** @test */
    public function メニューをとったら、ランチメニューである()
    {
        $lunch_shop = new LunchShop();
        $this->assertEquals('ランチメニュー', $lunch_shop->menu());
    }

    /** @test */
    public function ランチメニューで注文できる()
    {
        $lunch_shop = new LunchShop();
        $this->assertTrue($lunch_shop->order('ランチメニュー'));
    }

    /** @test */
    public function モーニングメニューでは注文できない()
    {
        $lunch_shop = new LunchShop();
        $this->assertFalse($lunch_shop->order('モーニングメニュー'));
    }

    /** @test */
    public function ディナーメニューでは注文できない()
    {
        $lunch_shop = new LunchShop();
        $this->assertFalse($lunch_shop->order('ディナーメニュー'));
    }
}
