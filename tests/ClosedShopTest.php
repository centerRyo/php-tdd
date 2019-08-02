<?php

namespace Tests;

use Tests\TestCase;
use App\ClosedShop;

class ClosedShopTest extends TestCase
{
    /** @test */
    public function 挨拶したら営業時間を返す()
    {
        $closed_shop = new ClosedShop();
        $this->assertEquals("営業時間は5時から24時までです\n", $closed_shop->greet());
    }
}