<?php

namespace Tests\Money;

use Tests\TestCase;

class MoneyTest extends TestCase
{
    /** @test */
    public function ドルを掛け算できる()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}

