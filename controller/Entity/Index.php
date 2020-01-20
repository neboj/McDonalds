<?php
declare(strict_types=1);

namespace Controller\Entity;

use Symfony\Component\HttpFoundation\Request;

class Index extends Controller
{

    public function __construct(string $tpl = '')
    {
        $this->tplName = 'index.html';
        if (!empty($tpl)) {
            $this->tplName = $tpl;
        }
        parent::__construct($this->tplName);
    }

    protected function read(){
        $order = new \McDonalds\Food\Entity\Cheeseburger();
        $order = new \McDonalds\Food\Decorator\WithFries($order);
        $order = new \McDonalds\Food\Decorator\ExtraSauce($order);

        $factory = new \McDonalds\Drink\FactoryMethod\Drink();
        $order = $factory->make('coca');
        $order = new \McDonalds\Drink\Decorator\Lemon($order);

        echo '---reading ' . '/view/index.html htmlFile' . '--- <br>';
        if (file_exists(TEMPLATE_DIR . $this->tplName)) {
            include TEMPLATE_DIR . $this->tplName;
        } else {
            die('**Tpl for this file does not exist**. <br> --!File reading stopped!--.<br>--!App closed!--');
        }
    }

}