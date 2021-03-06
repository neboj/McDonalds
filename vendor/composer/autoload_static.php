<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56f977239e4df855f91499a55353e35d
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
            'Symfony\\Component\\Mime\\' => 23,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'M' => 
        array (
            'McDonalds\\Food\\' => 15,
            'McDonalds\\Drink\\' => 16,
            'McDonalds\\' => 10,
        ),
        'C' => 
        array (
            'Controller\\FactoryMethod\\' => 25,
            'Controller\\Entity\\' => 18,
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Symfony\\Component\\Mime\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/mime',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'McDonalds\\Food\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Food',
        ),
        'McDonalds\\Drink\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Drink',
        ),
        'McDonalds\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Controller\\FactoryMethod\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller/FactoryMethod',
        ),
        'Controller\\Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller/Entity',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56f977239e4df855f91499a55353e35d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56f977239e4df855f91499a55353e35d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
