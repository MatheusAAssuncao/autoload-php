<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c643c5f66190c34087bd7324a31a006
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c643c5f66190c34087bd7324a31a006::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c643c5f66190c34087bd7324a31a006::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c643c5f66190c34087bd7324a31a006::$classMap;

        }, null, ClassLoader::class);
    }
}
