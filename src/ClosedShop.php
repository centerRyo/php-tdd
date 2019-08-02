<?php

namespace App;

use RuntimeException;

class ClosedShop
{
    public function greet()
    {
        return "営業時間は5時から24時までです\n";
    }

    public function menu()
    {
        // throw new RuntimeException('営業時間は5時から24時までです');
        return '営業時間外です';
    }
}
