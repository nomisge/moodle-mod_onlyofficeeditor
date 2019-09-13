<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita849e9fe15e5e0d8650886cb38774b7c
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita849e9fe15e5e0d8650886cb38774b7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita849e9fe15e5e0d8650886cb38774b7c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
