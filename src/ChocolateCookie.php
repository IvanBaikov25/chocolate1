<?php

namespace Baikov\Chocolate1;
use Baikov\Chocolate\Snack;

class ChocolateCookie extends Snack
{
    public function __construct()
    {
        parent::__construct('Шоколадное печенье', 'Белый шоколад', ['Шоколадные чипсы']);
    }
}
