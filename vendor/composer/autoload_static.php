<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2823b9c20358460246199bfe085d390
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2823b9c20358460246199bfe085d390::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2823b9c20358460246199bfe085d390::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf2823b9c20358460246199bfe085d390::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
