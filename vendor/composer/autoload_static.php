<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd84ddc14abae6857b188e7931739e4dc
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utdevnp\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utdevnp\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd84ddc14abae6857b188e7931739e4dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd84ddc14abae6857b188e7931739e4dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd84ddc14abae6857b188e7931739e4dc::$classMap;

        }, null, ClassLoader::class);
    }
}
