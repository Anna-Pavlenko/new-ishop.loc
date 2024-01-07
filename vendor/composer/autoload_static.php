<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd087fbf5328358b3ff3d5c2374e190e
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd087fbf5328358b3ff3d5c2374e190e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd087fbf5328358b3ff3d5c2374e190e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd087fbf5328358b3ff3d5c2374e190e::$classMap;

        }, null, ClassLoader::class);
    }
}
