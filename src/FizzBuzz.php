<?php

namespace App;

class FizzBuzz
{
    public static function FizzBuzz($name)
    {
        if ($name === "$name") {
            return "$name";
        } elseif ($name % 3 === 0) {
            return 'Fizz';
        } else {
            return "$name";
        }
    }
}