<?php

namespace Tests;

use App\ShopProvider;
use App\DinnerShop;

// お店を表現するプログラム
// AM5時からAM11時まではいらっしゃいませ、おはようございますと返す＋朝用メニューで注文できる
// AM11時からPM5時まではいらっしゃいませ、こんにちはと返す＋ランチメニューで注文できる
// PM5時からAM0時まではいらっしゃいませ、こんばんはと返す＋ディナーメニューで注文できる

class ShopProviderTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        date_default_timezone_set('Asia/Tokyo');
    }

    /** @test */
    public function PM5時からAM0時の場合はDinnerShopを返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime(19)));
        $this->assertInstanceOf(DinnerShop::class, $provider->call());
    }

    /** @test */
    public function PM5時の場合はDinnerShopを返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 17)));
        $this->assertInstanceOf(DinnerShop::class, $provider->call());
    }

    /** @test */
    public function PM11時59分59秒の場合はDinnerShopを返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 23, $minute = 59, $second = 59)));
        $this->assertInstanceOf(DinnerShop::class, $provider->call());
    }

    /** @test */
    public function PM4時59分59秒の場合はこんにちはと返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 16, $minute = 59, $second = 59)));
        $this->assertEquals('こんにちは', $provider->call());
    }

    /** @test */
    public function AM0時の場合は何も返さない()
    {
        $provider = new ShopProvider($hour = date('H', mktime(0)));
        $this->assertEquals('', $provider->call());
    }

    /** @test */
    public function AM5時からAM11時の場合はおはようございますと返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 10)));
        $this->assertEquals('おはようございます', $provider->call());
    }

    /** @test */
    public function AM5時の場合はおはようございますと返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime(5)));
        $this->assertEquals('おはようございます', $provider->call());
    }

    /** @test */
    public function AM4時59分59秒の場合は何も返さない()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 4, $minute = 59, $second = 59)));
        $this->assertEquals('', $provider->call());
    }

    /** @test */
    public function AM11時00分01秒の場合はこんにちはと返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 11, $minute = 00, $second = 01)));
        $this->assertEquals('こんにちは', $provider->call());
    }

    /** @test */
    public function AM10時59分59秒の場合はおはようございますと返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 10, $minute = 59, $second = 59)));
        $this->assertEquals('おはようございます', $provider->call());
    }

    /** @test */
    public function AM11時からPM5時の場合はこんにちはと返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 13)));
        $this->assertEquals('こんにちは', $provider->call());
    }

    /** @test */
    public function AM11時の場合はこんにちはと返す()
    {
        $provider = new ShopProvider($hour = date('H', mktime($hour = 11)));
        $this->assertEquals('こんにちは', $provider->call());
    }


}