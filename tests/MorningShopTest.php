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
}
