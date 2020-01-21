<?php


namespace Controller\FactoryMethod;



use Controller\Entity\Index;
use Controller\Entity\User;

class Controller implements ControllerInterface
{
    public function make(string $slug): \Controller\Entity\ControllerInterface
    {
        switch ($slug) {
            case "user":
                return new User();
            case "/":
            default:
                return new Index();
        }
    }
}