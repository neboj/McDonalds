<?php
declare(strict_types=1);

namespace McDonalds\Drink\Decorator;


interface DrinkInterface extends \McDonalds\Drink\Entity\DrinkInterface
{
    public function __construct(\McDonalds\Drink\Entity\DrinkInterface $drink);
}