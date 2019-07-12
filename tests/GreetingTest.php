<?php

namespace Tests;

use App\Greeting;

class GreetingTest extends TestCase
{

    // AM5時からAM11時の場合はおはようございますと返す
    // AM11時からPM5時の場合はこんにちはと返す
    // PM5時からAM0時の場合はこんばんはと返す
    // AM0時からAM5時の間は寝ているので何も返さない

    /** @test */
    public function AM5時からAM11時の場合はおはようございますと返す()
    {
        $greeting = new Greeting();
        $this->assertEquals('おはようございます', $greeting->call());
    }
}