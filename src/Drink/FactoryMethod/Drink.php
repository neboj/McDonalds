<?php
declare(strict_types=1);

namespace McDonalds\Drink\FactoryMethod;


use McDonalds\Drink\Entity\CocaCola;

class Drink implements DrinkInterface
{

    public function make(string $name): \McDonalds\Drink\Entity\DrinkInterface
    {
        switch ($name) {
            case 'coca':
            default :
                return new CocaCola();
        }
    }
}