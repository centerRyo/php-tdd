<?php

namespace App\Money;

abstract class Money
{
    protected $amount;
    protected $currency;

    public function __construct()
    {
        return $this->currency;
    }

    public function equals(Money $money)
    {
        // return $this->amount == $money->amount && get_class($this) == get_class($money); // クラス名を文字列として取得している
        return $this->amount == $money->amount && $this instanceof $money; // 言語レベルでオブジェクトを比較する時にinstanceOfを使用している
    }

    abstract public function times(int $multiplier): Money;

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }

    abstract public function currency() : String;
}
