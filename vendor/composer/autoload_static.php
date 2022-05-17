<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6899e69c8026dbf1e9be1b4351a1ff35
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DankiCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DankiCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DankiCode',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6899e69c8026dbf1e9be1b4351a1ff35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6899e69c8026dbf1e9be1b4351a1ff35::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6899e69c8026dbf1e9be1b4351a1ff35::$classMap;

        }, null, ClassLoader::class);
    }
}
