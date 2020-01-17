<?php
declare(strict_types=1);

namespace McDonalds\Food\Decorator;


use McDonalds\Food\Entity\FoodInterface;

class WithFries extends Decorator
{
    public function __construct(FoodInterface $food)
    {
        parent::__construct($food);
        $this->price = 30;
        $this->description = 'Fries';
    }
}