<?php

namespace App;

class Greeting
{
    private $time;

    public function __construct($time = 0)
    {
        $this->time = $time;
    }

    public function call()
    {
        if ($this->time >= 5 && $this->time < 11) {
            return 'おはようございます';
        }
        // 1.PM5時からAM0時の場合はこんばんはと返す
        // 2.AM5時からAM11時の場合はおはようございますと返す
        // 3.AM11時からPM5時の場合はこんにちはと返す
        // 4.AM0時からAM5時の間は寝ているので何も返さない
        // if (date('H') >= '17') {
        //     return 'こんばんは';
        // }
        if ($this->time >= 17) {
            return 'こんばんは';
        }

        if ($this->time >= 11 && $this->time <= 17) {
            return 'こんにちは';
        }
    }
}