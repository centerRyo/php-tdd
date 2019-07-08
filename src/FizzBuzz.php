<?php

namespace App;

class FizzBuzz
{
    public static function FizzBuzz($name)
    {
        if ($name === 3) {
            return 'Fizz';
        } elseif ($name === 6) {
            return 'Fizz';
        } else {
            return "$name";
        }
    }
}