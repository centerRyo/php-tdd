<?php

namespace Test;

use Tests\TestCase;
use App\FizzBuzz;

// 引数にとった値を文字列で返す
// ただし3の倍数の時はFizzを返す
// ただし5の倍数の時はBuzzを返す
// ただし3と5の両方の倍数の場合はFizzBuzzを返す
// 引数が１から100までの数でない場合エラー

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function 引数にとった値を文字列で返す()
    {
    $this->assertEquals('中土井', FizzBuzz::FizzBuzz('なかどい'));
    }
}