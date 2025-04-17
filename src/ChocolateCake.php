<?php

namespace Baikov\Chocolate1;
require_once 'vendor/autoload.php';
use Baikov\Chocolate\Snack;

class ChocolateCake extends Snack
{
    public function __construct()
    {
        parent::__construct('Шоколадный торт', 'Темный шоколад', ['Крем', 'Фрукты']);
    }
}
