<?php
declare(strict_types=1);

namespace Controller\Entity;


interface ControllerInterface
{
    public function start();

    public function __construct(string $tpl = '');

    public  function read(): array;

    public function stop(array $data);
}