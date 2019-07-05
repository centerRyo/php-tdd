<?php

namespace App;

class FizzBuzz
{
    public static function FizzBuzz($name)
    {
        // 数値以外の値だったらそのまま返す、数値だったら数値文字列にして返す
        if (ctype_digit("$name")) {
            return "$name";
        } else {
            return $name;
        }
        // if ($name === 'なかどい') {
        //     return 'なかどい';
        // } elseif ($name === 1) {
        //     return '1';
        // } else {
        //     return '2';
        // }
    }
}