<?php
namespace Baikov\Chocolate1;
require_once '/vendor/autoload.php';

use Baikov\Chocolate1\AppChocolateFactory;

$factory = new AppChocolateFactory();
$factory->orderSnack('bar');
$factory->orderSnack('cube');
$factory->orderSnack('tile');