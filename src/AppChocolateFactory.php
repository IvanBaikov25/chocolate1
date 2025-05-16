<?php

namespace Baikov\Chocolate1;

use Baikov\Chocolate\ChocolateFactory;
use Baikov\Chocolate\Snack;
use Baikov\Chocolate1\ChocolateBar;
use Baikov\Chocolate1\ChocolateCube;
use Baikov\Chocolate1\ChocolateTile;

class AppChocolateFactory extends ChocolateFactory
{
    protected function createSnack(string $type): Snack
    {
        return match (strtolower($type)) {
            'bar' => new ChocolateBar('Chocolate Bar', 'Молочный шоколад', ['Орехи', 'Карамель']),
            'cube' => new ChocolateCube('Chocolate Cube', 'Темный шоколад', ['Изюм']),
            'tile' => new ChocolateTile('Chocolate Tile', 'Белый шоколад', ['Кокос', 'Кранч']),
            default => throw new \InvalidArgumentException("Неизвестный тип снека: $type"),
        };
    }
}