<?php

namespace App\Money;

class Money
{
    protected $amount;

    public function equals(Money $money)
    {
        // return $this->amount == $money->amount && get_class($this) == get_class($money); // クラス名を文字列として取得している
        return $this->amount == $money->amount && $this instanceof $money; // 言語レベルでオブジェクトを比較する時にinstanceOfを使用している
    }

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }
}
