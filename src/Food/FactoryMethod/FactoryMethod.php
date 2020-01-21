<?php
declare(strict_types=1);

namespace McDonalds\Food\FactoryMethod;

use McDonalds\Food\Entity\Cheeseburger;
use McDonalds\Food\Entity\FoodInterface;
use McDonalds\Food\Entity\Hamburger;

class FactoryMethod implements FactoryMethodInterface
{
    const FOOD_TYPE_HAMBURGER = 'hamburger';
    const FOOD_TYPE_CHEESEBURGER = 'cheeseburger';

    public function make(string $productName): FoodInterface
    {
        switch ($productName) {
            case self::FOOD_TYPE_HAMBURGER:
                $result = new Hamburger();
                break;
            case self::FOOD_TYPE_CHEESEBURGER:
                $result = new Cheeseburger();
                break;
            default:
                $result = new Hamburger();
        }
        return $result;
    }
}