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
        $this->assertEquals(new Dollar(10), $five->times(2));
    }

    /** @test */
    public function ドルを掛け算した後に掛け算したら計算結果が正しく返ってくる()
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(15), $five->times(3));
    }
    /** @test */
    public function 金額が同じドルは同じである()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
    }

    /** @test */
    public function 金額が異なるドルは違うものである()
    {
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
