<?php

require_once(dirname(__FILE__) . ('/../vendor/autoload.php'));

use App\ShopProvider;

date_default_timezone_set('Asia/Tokyo');

$shop_provider = new ShopProvider($hour = '05');
$shop = $shop_provider->call();

echo $shop->greet();

echo "\n";

while (true) {
    echo 'ご注文をお伺いします' . "\n";
    $line = trim(fgets(STDIN));
    if ($line == 'いいえ') {
        echo 'かしこまりました' . "\n";
        exit();
    } else {
        echo $shop->order($line) . "\n";
    }
}
