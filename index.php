<?php

include 'vendor/autoload.php';
define('TEMPLATE_DIR','./view/');
//$is_ajax = 'XMLHttpRequest' == ( $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '' );
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

echo 'Startscript <br>';
//$controller = new Controller\Index($request);
$factoryMethod = new \Controller\FactoryMethod\Controller();
$factoryMethod->make("/");

echo 'Endscript';