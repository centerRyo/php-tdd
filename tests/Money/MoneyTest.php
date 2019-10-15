<?php

namespace Tests\Money;

use App\Money\Franc;
use Tests\TestCase;
use App\Money\Money;
use App\Money\Bank;
use App\Money\Sum;

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
    public function 金額が同じドルとフランは異なる金額として扱う()
    {
        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    /** @test */
    public function ドルクラスを呼ぶと文字列の通貨が返ってくる()
    {
        $this->assertEquals('USD', Money::dollar(1)->currency());
    }

    /** @test */
    public function フランクラスを呼ぶと文字列の通貨が返ってくる()
    {
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }

    /** @test */
    public function 異なる通貨クラスで比較しても同じ値を返す()
    {
        $this->assertTrue((new Money(10, 'CHF'))->equals(new Franc(10, 'CHF')));
    }

    /** @test */
    public function ドルにドルを足すと正しい値が計算されて返ってくる()
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $sum = Money::dollar(5)->plus(Money::dollar(5));
        $reduced = $bank->reduce($sum, 'USD');
        $this->assertEquals(Money::dollar(10), $reduced);
    }

    /** @test */
    public function ドルを加算すると合計値が得られる()
    {
        $five = Money::dollar(5);
        $result = $five->plus($five);
        $sum = $result;
        $this->assertEquals($five, $sum->augend);
        $this->assertEquals($five, $sum->addend);
    }

    /** @test */
    public function Moneyは通貨の合計を金額として持つ()
    {
        $sum = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, 'USD');
        $this->assertEquals(Money::dollar(7), $result);
    }

    /** @test */
    public function 引数がMoneyの際にBankが通貨の合計を金額としてもつ()
    {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1), 'USD');
        $this->assertEquals(Money::dollar(1), $result);
    }
}
