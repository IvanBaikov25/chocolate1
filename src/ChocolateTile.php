<?php

namespace Baikov\Chocolate1;

use Baikov\Chocolate\Snack;

class ChocolateTile extends Snack
{
    public function cut(): void
    {
        echo "Режем шоколад вертикальными кусочками.\n";
    }
}