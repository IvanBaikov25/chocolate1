<?php

require 'vendor/autoload.php';

use Baikov\Chocolate1\ChocolateFactory;

$factory = new ChocolateFactory();
$factory->orderSnack('chocolate_bar');
$factory->orderSnack('chocolate_cake');
$factory->orderSnack('chocolate_cookie');