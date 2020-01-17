<?php
declare(strict_types=1);

namespace McDonalds\Food\Decorator;


use McDonalds\Food\Entity\FoodInterface;

class Decorator implements DecoratorInterface
{
    protected $food;

    protected $price = 0;

    protected $description = '';

    public function __construct(FoodInterface $food)
    {
        $this->food = $food;
    }

    /**
     * @inheritDoc
     */
    public function getPrice(): int
    {
        return $this->food->getPrice() + $this->price;
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return $this->food->getDescription()  . ' & ' . $this->description;
    }
}