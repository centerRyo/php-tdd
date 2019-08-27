<?php

namespace Tests\Money;

use Tests\TestCase;
use App\Money\Dollar;
use App\Money\Franc;
use App\Money\Money;

class MoneyTest extends TestCase
{
    /** @test */
    public function ドルを掛け算できる()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
    }

    /** @test */
    public function ドルを掛け算した後に掛け算したら計算結果が正しく返ってくる()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }
    /** @test */
    public function 金額が同じドルは同じである()
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
    }

    /** @test */
    public function 金額が異なるドルは違うものである()
    {
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
    }

    /** @test */
    public function フランを掛け算できる()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
    }

    /** @test */
    public function フランを掛け算した後に掛け算したら計算結果が正しく返ってくる()
    {
        $five = Money::franc(5);
        $this->assertEquals(Money::franc(15), $five->times(3));
    }

    /** @test */
    public function 金額が同じフランは同じである()
    {
        $this->assertTrue((Money::franc(5))->equals(Money::franc(5)));
    }

    /** @test */
    public function 金額が異なるフランは異なるものである()
    {
        $this->assertFalse((Money::franc(5))->equals(Money::franc(6)));
    }

    /** @test */
    public function 金額が同じドルとフランは異なる金額として扱う()
    {
        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }
}
