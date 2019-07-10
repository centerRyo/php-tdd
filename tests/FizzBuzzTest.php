<?php

namespace Test;

use Tests\TestCase;
use App\FizzBuzz;

// 引数が１から100までの数でない場合エラー

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function 引数にとった値を文字列で返す()
    {
    $this->assertEquals('なかどい', FizzBuzz::switchFizzBuzz('なかどい'));
    }

    /** @test */
    public function 引数にとった数値を数値の文字列で返す()
    {
        $this->assertSame('1', FizzBuzz::switchFizzBuzz(1));
    }

    /** @test */
    public function 引数にとった数値の2を数値の文字列で返す()
    {
        $this->assertSame('2', FizzBuzz::switchFizzBuzz(2));
    }

    /** @test */
    public function 引数に数値の3を渡したらFizzを返す()
    {
        $this->assertSame('Fizz', FizzBuzz::switchFizzBuzz(3));
    }

    /** @test */
    public function 引数に数値の6を渡したらFizzを返す()
    {
        $this->assertSame('Fizz', FizzBuzz::switchFizzBuzz(6));
    }

    /** @test */
    public function 引数に数値の9を渡したらFizzを返す()
    {
        $this->assertSame('Fizz', FizzBuzz::switchFizzBuzz(9));
    }

    /** @test */
    public function 引数に5を渡したらBuzzを返す()
    {
        $this->assertSame('Buzz', FizzBuzz::switchFizzBuzz(5));
    }

    /** @test */
    public function 引数に10を渡したらBuzzを返す()
    {
        $this->assertSame('Buzz', FizzBuzz::switchFizzBuzz(10));
    }

    /** @test */
    public function 引数に15を渡したらFizzBuzzを返す()
    {
        $this->assertSame('FizzBuzz', FizzBuzz::switchFizzBuzz(15));
    }

    /** @test */
    public function 引数に600を渡したらエラーが返る()
    {
        $this->assertFalse(FizzBuzz::switchFizzBuzz(600));
    }

}