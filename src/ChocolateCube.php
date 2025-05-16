<?php

namespace Baikov\Chocolate1;

use Baikov\Chocolate\Snack;

class ChocolateCube extends Snack
{
    public function cut(): void
    {
        echo "Режем шоколад кубиками.\n";
    }
}