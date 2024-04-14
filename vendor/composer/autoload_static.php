<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1864699fc6e3cd09da36520e1b445778
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fzot\\Translation\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fzot\\Translation\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1864699fc6e3cd09da36520e1b445778::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1864699fc6e3cd09da36520e1b445778::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1864699fc6e3cd09da36520e1b445778::$classMap;

        }, null, ClassLoader::class);
    }
}
