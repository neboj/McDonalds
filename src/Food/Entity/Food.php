<?php


namespace McDonalds\Food\Entity;


class Food implements FoodInterface
{

    protected $price = 0;

    protected $description = '';

    /**
     * @inheritDoc
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}