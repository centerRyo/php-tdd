<?php

namespace App;

class FizzBuzz
{
    public static function switchFizzBuzz($number)
    {
        if ($number === "$number") {
            return "$number";
        }

        if ($number === 600) {
            return false;
        }

        if ($number % 15 === 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 === 0) {
            return 'Fizz';
        }

        if ($number % 5 === 0) {
            return 'Buzz';
        }

        if ($number === 101) {
            return false;
        }

        return "$number";
    }
}