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
        $greeting = new Greeting($hour = date('H', mktime(19)));
        $this->assertEquals('こんばんは', $greeting->call());
    }

    /** @test */
    public function AM5時からAM11時の場合はおはようございますと返す()
    {
        $greeting = new Greeting($hour = date('H', mktime($hour = 10)));
        $this->assertEquals('おはようございます', $greeting->call());
    }

    /** @test */
    public function AM11時からPM5時の場合はこんにちはと返す()
    {
        $greeting = new Greeting($hour = date('H', mktime($hour = 13)));
        $this->assertEquals('こんにちは', $greeting->call());
    }

    /** @test */
    public function PM5時の場合はこんばんはと返す()
    {
        $greeting = new Greeting($hour = date('H', mktime($hour = 17)));
        $this->assertEquals('こんばんは', $greeting->call());
    }

    /** @test */
    public function AM11時の場合はこんにちはと返す()
    {
        $greeting = new Greeting($hour = date('H', mktime($hour = 11)));
        $this->assertEquals('こんにちは', $greeting->call());
    }
}