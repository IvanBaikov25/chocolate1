<?php

namespace Baikov\Chocolate1;
use Baikov\Chocolate\Snack;

class ChocolateCake extends Snack
{
    public function __construct()
    {
        parent::__construct('Шоколадный торт', 'Темный шоколад', ['Крем', 'Фрукты']);
    }
}
