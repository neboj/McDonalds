<?php
declare(strict_types=1);

namespace Controller\Entity;


class User extends AbstractController
{

    public function __construct(string $tplName = '')
    {
        $this->tplName = 'user.html';
        parent::__construct($this->tplName);
    }

    public function read(): array
    {
        return ['user'=>'Nebojsa'];
    }
}