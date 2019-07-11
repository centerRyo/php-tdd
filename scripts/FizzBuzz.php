<?php

require('../vendor/autoload.php');

use App\FizzBuzz;
foreach (range(-10, 110) as $number) {
    $string = sprintf("%d => %s\n", $number, FizzBuzz::switchFizzBuzz($number));
    echo $string;
}

