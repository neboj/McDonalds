<?php
declare(strict_types=1);

namespace Controller\Entity;

use Symfony\Component\HttpFoundation\Request;

class Index extends AbstractController
{

    public function __construct(string $tpl = '')
    {
        $this->tplName = 'index.html';
        if (!empty($tpl)) {
            $this->tplName = $tpl;
        }
        parent::__construct($this->tplName);
    }

    /**
     * Read method returns data to render in view.
     * @return array
     */
    public function read(): array{
        $foodFactory = new \McDonalds\Food\FactoryMethod\FactoryMethod();
        $order = $foodFactory->make($foodFactory::FOOD_TYPE_CHEESEBURGER);
        $order = new \McDonalds\Food\Decorator\WithFries($order);
        $order = new \McDonalds\Food\Decorator\ExtraSauce($order);

        $factory = new \McDonalds\Drink\FactoryMethod\Drink();
        $order = $factory->make('coca');
        $order = new \McDonalds\Drink\Decorator\Lemon($order);

        return ['order' => $order];
    }

}