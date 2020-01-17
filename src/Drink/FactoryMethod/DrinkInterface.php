<?php
declare(strict_types=1);

namespace McDonalds\Drink\FactoryMethod;


interface DrinkInterface
{
    public function make(string $name): \McDonalds\Drink\Entity\DrinkInterface;
}