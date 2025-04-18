<?php

require 'vendor/autoload.php';
use Baikov\Chocolate1\TwoChocolateFactory;

$factory = new TwoChocolateFactory();
$factory->orderSnack('chocolate_bar');
$factory->orderSnack('chocolate_cake');
$factory->orderSnack('chocolate_cookie');