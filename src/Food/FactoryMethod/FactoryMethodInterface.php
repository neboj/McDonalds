<?php
declare(strict_types=1);

namespace McDonalds\Food\FactoryMethod;


use McDonalds\Food\Entity\FoodInterface;

interface FactoryMethodInterface
{
    public function make(string $productName): FoodInterface;
}