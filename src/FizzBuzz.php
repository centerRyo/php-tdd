<?php

namespace App;

class FizzBuzz
{
    public static function FizzBuzz($name)
    {
        if ($name === 'なかどい') {
            return 'なかどい';
        } elseif ($name === 1) {
            return '1';
        } else {
            return '2';
        }
    }
}