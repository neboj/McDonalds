<?php
declare(strict_types=1);

namespace McDonalds\Food\FactoryMethod;

use McDonalds\Food\Entity\Cheeseburger;
use McDonalds\Food\Entity\FoodInterface;
use McDonalds\Food\Entity\Hamburger;

class FactoryMethod implements FactoryMethodInterface
{

    public function make(string $productName): FoodInterface
    {
        switch ($productName) {
            case 'hamburger':
                $result = new Hamburger();
                break;
            case 'cheeseburger':
                $result = new Cheeseburger();
                break;
            default:
                $result = new Hamburger();
        }
        return $result;
    }
}