<?php
declare(strict_types=1);

namespace McDonalds\Food\Entity;

class Hamburger extends Food
{
    public function __construct()
    {
        $this->price = '150';
        $this->description = 'Hamburger';
    }
}