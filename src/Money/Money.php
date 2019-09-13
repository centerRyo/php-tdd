<?php

namespace App\Money;

use phpDocumentor\Reflection\Types\String_;

class Money
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
        return $this->amount == $money->amount && $this->currency() == $money->currency() ; // 言語レベルでオブジェクトを比較する時にinstanceOfを使用している
    }

    // abstract public function times(int $multiplier): Money;
    public function times(int $amount)
    {
        return null;
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }

    public function currency(): String
    {
        return $this->currency;
    }

    public function toString(): String
    {
        return $this->amount + '' + $this->currency;
    }
}
