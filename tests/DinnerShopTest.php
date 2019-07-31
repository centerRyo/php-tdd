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
}
