<?php

namespace App;

class FizzBuzz
{
    public static function FizzBuzz($name)
    {
        if ($name === 3) {
            return 'Fizz';
        } else {
            return "$name";
        }
    }
}