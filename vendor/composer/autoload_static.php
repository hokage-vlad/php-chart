<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe74579d2017a740ad27cde33fb6c6f7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe74579d2017a740ad27cde33fb6c6f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe74579d2017a740ad27cde33fb6c6f7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbe74579d2017a740ad27cde33fb6c6f7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
