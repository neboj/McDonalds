<?php
declare(strict_types=1);

namespace McDonalds\Drink\Entity;


class CocaCola extends Drink
{
    public function __construct()
    {
        parent::__construct();
        $this->price = 125;
        $this->description = 'Coca-Cola';
    }
}