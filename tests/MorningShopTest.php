<?php

namespace Tests;

use Tests\Testcase;
use App\MorningShop;

class MorningShopTest extends Testcase
{
    /** @test */
    public function 挨拶したらいらっしゃいませ、おはようございますと返す()
    {
        $morning_shop = new MorningShop();
        $this->assertEquals('いらっしゃいませ、おはようございます', $morning_shop->greet());
    }

    /** @test */
    public function メニューをとったら、モーニングメニューである()
    {
        $morning_shop = new MorningShop();
        $this->assertEquals('モーニングメニュー', $morning_shop->menu());
    }

    /** @test */
    public function モーニングメニューで注文できる()
    {
        $morning_shop = new MorningShop();
        $this->assertTrue($morning_shop->order('モーニングメニュー'));
    }

    /** @test */
    public function ディナーメニューでは注文できない()
    {
        $morning_shop = new MorningShop();
        $this->assertFalse($morning_shop->order('ディナーメニュー'));
    }

    /** @test */
    public function ランチメニューでは注文できない()
    {
        $morning_shop = new MorningShop();
        $this->assertFalse($morning_shop->order('ランチメニュー'));
    }
}
