<?php

namespace Baikov\Chocolate1;

use Baikov\Chocolate\Snack;

class ChocolateBar extends Snack
{
    public function cut(): void
    {
        echo "Нарезаем шоколадку плитками.\n";
    }
}