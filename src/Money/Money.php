<?php

namespace App\Money;

use App\Money\Currency;
use App\Money\Expression;
use App\Money\Sum;

class Money implements Expression
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, String $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Money $money)
    {
        // return $this->amount == $money->amount && get_class($this) == get_class($money); // クラス名を文字列として取得している
        // return $this->amount == $money->amount && $this->currency() == $money->currency() ; // 言語レベルでオブジェクトを比較する時にinstanceOfを使用している
        return $this->amount == $money->amount && $this->currency()->equals($money->currency()); //valueオブジェクトを使った形
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }

    public function currency(): Currency
    {
        return new Currency($this->currency);
    }

    public function toString(): string
    {
        return "{$this->amount}{$this->currency}";
    }

    public function plus($addend): Expression
    {
        return new Sum($this, $addend);
    }
}
