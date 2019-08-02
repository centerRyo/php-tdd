<?php

require_once('../vendor/autoload.php');

use App\ShopProvider;

date_default_timezone_set('Asia/Tokyo');

$shop_provider = new ShopProvider($hour = 3);
$shop = $shop_provider->call();

echo $shop->greet();

echo $shop->menu();
