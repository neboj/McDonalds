<?php
declare(strict_types=1);

namespace Controller\Entity;


abstract class Controller implements ControllerInterface
{
    protected $tplName = '';

    public function __construct(string $tplName = '')
    {
        $this->tplName = $tplName;
        $this->start();
        $this->read();
        $this->stop();
    }

    public function start()
    {
        echo '---reading ' . get_called_class()  . ' phpClass--- <br>';
    }

    public function stop()
    {
        echo '--closing ' . get_class() . '<br>';
    }

    abstract protected function read();

}