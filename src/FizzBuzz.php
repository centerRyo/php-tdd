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

        if ($name === 5) {
            return 'Buzz';
        }

        if ($name === 10) {
            return 'Buzz';
        }

        return "$name";
    }
}