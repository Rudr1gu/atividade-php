<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0c7b015690c571a6b0dc48d4f1b8d1e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Projetophp2\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Projetophp2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0c7b015690c571a6b0dc48d4f1b8d1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0c7b015690c571a6b0dc48d4f1b8d1e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0c7b015690c571a6b0dc48d4f1b8d1e::$classMap;

        }, null, ClassLoader::class);
    }
}
