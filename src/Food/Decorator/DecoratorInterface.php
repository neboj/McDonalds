<?php


namespace McDonalds\Food\Decorator;


use McDonalds\Food\Entity\FoodInterface;

interface DecoratorInterface extends FoodInterface
{
    public function __construct(FoodInterface $food);
}