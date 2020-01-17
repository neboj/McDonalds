<?php
declare(strict_types=1);

namespace McDonalds\Food\Entity;

interface FoodInterface
{
    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @return string
     */
    public function getDescription(): string;
}