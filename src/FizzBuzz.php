<?php

namespace App;

class FizzBuzz
{
    public static function FizzBuzz($name)
    {
        if ($name === "$name") {
            return "$name";
        }

        if ($name % 3 === 0) {
            return 'Fizz';
        }

        return "$name";
    }
}