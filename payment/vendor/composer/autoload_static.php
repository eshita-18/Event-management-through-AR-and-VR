<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf5dbe1ebc701090132a379c4b28dc86
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf5dbe1ebc701090132a379c4b28dc86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf5dbe1ebc701090132a379c4b28dc86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf5dbe1ebc701090132a379c4b28dc86::$classMap;

        }, null, ClassLoader::class);
    }
}
