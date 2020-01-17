<?php
declare(strict_types=1);

namespace McDonalds\Food\Decorator;


use McDonalds\Food\Entity\FoodInterface;

class ExtraSauce extends Decorator
{
    public function __construct(FoodInterface $food)
    {
        parent::__construct($food);
        $this->price = '20';
        $this->description = 'Extra sauce';
    }
}