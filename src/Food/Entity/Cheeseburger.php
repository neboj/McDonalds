<?php
declare(strict_types=1);

namespace McDonalds\Food\Entity;


class Cheeseburger extends Food
{
    public function __construct()
    {
        $this->price = '160';
        $this->description = 'Cheeseburger';
    }
}