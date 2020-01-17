<?php

include 'vendor/autoload.php';

//$is_ajax = 'XMLHttpRequest' == ( $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '' );
//$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$order = new \McDonalds\Food\Entity\Cheeseburger();
$order = new \McDonalds\Food\Decorator\WithFries($order);
$order = new \McDonalds\Food\Decorator\ExtraSauce($order);

$factory = new McDonalds\Drink\FactoryMethod\Drink();
$order = $factory->make('coca');
$order = new \McDonalds\Drink\Decorator\Lemon($order);

echo $order->getDescription();
echo $order->getPrice();
