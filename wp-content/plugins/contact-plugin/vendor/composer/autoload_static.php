<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8bc85c4e3bf7460c582bcb8c8dfb7851
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8bc85c4e3bf7460c582bcb8c8dfb7851::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8bc85c4e3bf7460c582bcb8c8dfb7851::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}