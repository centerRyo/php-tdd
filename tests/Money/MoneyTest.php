<?php

namespace Tests\Money;

use Tests\TestCase;
use App\Money\Dollar;

class MoneyTest extends TestCase
{
    /** @test */
    public function ドルを掛け算できる()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
    }

    /** @test */
    public function ドルを掛け算した後に掛け算したら計算結果が正しく返ってくる()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
    /** @test */
    public function 金額が同じドルは同じである()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
    }
}
