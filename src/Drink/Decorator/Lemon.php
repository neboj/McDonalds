<?php
declare(strict_types=1);

namespace McDonalds\Drink\Decorator;

/**
 * Class Lemon
 * @package McDonalds\Drink\Decorator
 */
class Lemon extends Drink
{

    /**
     * Lemon constructor.
     * @param \McDonalds\Drink\Entity\DrinkInterface $drink
     */
    public function __construct(\McDonalds\Drink\Entity\DrinkInterface $drink)
    {
        parent::__construct($drink);
        $this->price = '10';
        $this->description = 'Lemon';
    }
}