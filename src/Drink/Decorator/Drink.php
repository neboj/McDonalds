<?php
declare(strict_types=1);

namespace McDonalds\Drink\Decorator;

/**
 * Class Drink
 * @package McDonalds\Drink\Decorator
 */
class Drink implements DrinkInterface
{
    /** @var \McDonalds\Drink\Entity\Drink  */
    protected $drink;

    /** @var int */
    protected $price = 0;

    /** @var string */
    protected $description = '';

    public function __construct(\McDonalds\Drink\Entity\DrinkInterface $drink)
    {
        $this->drink = $drink;
    }

    public function getPrice()
    {
        return $this->drink->getPrice() + $this->price;
    }

    public function getDescription()
    {
        return $this->drink->getDescription() . ' & ' . $this->description;
    }
}