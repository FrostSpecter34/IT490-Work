<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6864f70e997927075b9aeb5dd3c123d9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/videlalvaro/php-amqplib/PhpAmqpLib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6864f70e997927075b9aeb5dd3c123d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6864f70e997927075b9aeb5dd3c123d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6864f70e997927075b9aeb5dd3c123d9::$classMap;

        }, null, ClassLoader::class);
    }
}