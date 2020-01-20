<?php


namespace Controller\FactoryMethod;



use Controller\Entity\Index;

class Controller implements ControllerInterface
{
    public function make(string $slug): \Controller\Entity\ControllerInterface
    {
        switch ($slug) {
            case "/":
            default:
                return new Index();
        }
    }
}