<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b75e8ae3546009c261c7a0e0ce55e53
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'c15d4a1253e33e055d05e547c61dcb71' => __DIR__ . '/..' . '/smarty/smarty/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Smarty\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Smarty\\' => 
        array (
            0 => __DIR__ . '/..' . '/smarty/smarty/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b75e8ae3546009c261c7a0e0ce55e53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b75e8ae3546009c261c7a0e0ce55e53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b75e8ae3546009c261c7a0e0ce55e53::$classMap;

        }, null, ClassLoader::class);
    }
}
