<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a1eb36a4844918bb4d474133b034fe7
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Views\\' => 6,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Connections\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/view',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
        'Connections\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a1eb36a4844918bb4d474133b034fe7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a1eb36a4844918bb4d474133b034fe7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a1eb36a4844918bb4d474133b034fe7::$classMap;

        }, null, ClassLoader::class);
    }
}