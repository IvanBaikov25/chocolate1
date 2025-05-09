<?php

namespace Baikov\Chocolate1;
use Baikov\Chocolate\ChocolateFactory;
use Baikov\Chocolate\Snack;
use Baikov\Chocolate1\ChocolateBar;
use Baikov\Chocolate1\ChocolateCake;
use Baikov\Chocolate1\ChocolateCookie;
use InvalidArgumentException;

class TwoChocolateFactory extends ChocolateFactory
{
    public function orderSnack(string $type): void
    {
        parent::orderSnack($type); 
    }

    protected function createSnack(string $type): Snack 
    {   
        switch ($type) {
            case 'chocolate_bar':
                return new ChocolateBar();
            case 'chocolate_cake':
                return new ChocolateCake();
            case 'chocolate_cookie':
                return new ChocolateCookie();
            default:
                throw new InvalidArgumentException("Неизвестный тип снэка: {$type}");
        }
    }
}
