<?php

include 'vendor/autoload.php';
define('TEMPLATE_DIR','./view/');
//$is_ajax = 'XMLHttpRequest' == ( $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '' );
//$requestUri = \Symfony\Component\HttpFoundation\Request::createFromGlobals()->getRequestUri();

function request_path()
{
    $request_uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $script_name = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
    $parts = array_diff_assoc($request_uri, $script_name);
    if (empty($parts))
    {
        return '/';
    }
    $path = implode('/', $parts);
    if (($position = strpos($path, '?')) !== FALSE)
    {
        $path = substr($path, 0, $position);
    }
    return $path;
}

$factoryMethod = new \Controller\FactoryMethod\Controller();
$factoryMethod->make(request_path());