<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit595660ca9df29a3892c3ced4e6d00161
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit595660ca9df29a3892c3ced4e6d00161::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit595660ca9df29a3892c3ced4e6d00161::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
