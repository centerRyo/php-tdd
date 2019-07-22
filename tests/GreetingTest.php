<?php

namespace Tests;

use App\Greeting;

class GreetingTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        date_default_timezone_set('Asia/Tokyo');
    }

    // 1.PM5時からAM0時の場合はこんばんはと返す
    // 2.AM5時からAM11時の場合はおはようございますと返す
    // 3.AM11時からPM5時の場合はこんにちはと返す
    // 4.AM0時からAM5時の間は寝ているので何も返さない

    /** @test */
    public function PM5時からAM0時の場合はこんばんはと返す()
    {
        $time = 19;
        $greeting = new Greeting($time);
        var_dump($greeting);
        $this->assertEquals('こんばんは', $greeting->call());
    }

    /** @test */
    public function AM5時からAM11時の場合はおはようございますと返す()
    {
        $time = date('H', mktime(10));
        $greeting = new Greeting($time);
        var_dump($greeting);
        $this->assertEquals('おはようございます', $greeting->call());
    }
}