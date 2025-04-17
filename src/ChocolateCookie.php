<?php

namespace Baikov\Chocolate1;
require_once 'vendor/autoload.php';
use Baikov\Chocolate\Snack;

class ChocolateCookie extends Snack
{
    public function __construct()
    {
        parent::__construct('Шоколадное печенье', 'Белый шоколад', ['Шоколадные чипсы']);
    }
}
