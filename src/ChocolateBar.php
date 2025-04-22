<?php

namespace Baikov\Chocolate1;
use Baikov\Chocolate\Snack;

class ChocolateBar extends Snack
{
    public function __construct()
    {
        parent::__construct('Шоколадный батончик', 'Молочный шоколад', ['Орехи', 'Изюм']);
    }
}
