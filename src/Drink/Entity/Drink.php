<?php
declare(strict_types=1);

namespace McDonalds\Drink\Entity;


class Drink implements DrinkInterface
{
    protected $price = 0;
    protected $description = '';

    public function __construct()
    {
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }
}