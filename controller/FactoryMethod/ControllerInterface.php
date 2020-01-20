<?php
declare(strict_types=1);

namespace Controller\FactoryMethod;


use Symfony\Component\HttpFoundation\Request;

interface ControllerInterface
{
    public function make(string $slug): \Controller\Entity\ControllerInterface;
}