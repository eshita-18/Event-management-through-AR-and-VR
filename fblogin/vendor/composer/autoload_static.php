<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f6af8bb135d91e523c7cfefb5392b95
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f6af8bb135d91e523c7cfefb5392b95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f6af8bb135d91e523c7cfefb5392b95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f6af8bb135d91e523c7cfefb5392b95::$classMap;

        }, null, ClassLoader::class);
    }
}
