<?php

namespace Test;

use Tests\TestCase;
use App\FizzBuzz;

// ただし3の倍数の時はFizzを返す
// ただし5の倍数の時はBuzzを返す
// ただし3と5の両方の倍数の場合はFizzBuzzを返す
// 引数が１から100までの数でない場合エラー

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function 引数にとった値を文字列で返す()
    {
    $this->assertEquals('なかどい', FizzBuzz::FizzBuzz('なかどい'));
    }

    /** @test */
    public function 引数にとった数値を数値の文字列で返す()
    {
        $this->assertSame('1', FizzBuzz::FizzBuzz(1));
    }

    /** @test */
    public function 引数にとった数値の2を数値の文字列で返す()
    {
        $this->assertSame('2', FizzBuzz::FizzBuzz(2));
    }

    /** @test */
    public function 引数に数値の3を渡したらFizzを返す()
    {
        $this->assertSame('Fizz', FizzBuzz::FizzBuzz(3));
    }
}