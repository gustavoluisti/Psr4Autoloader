<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38de20b2bad25fa4ed814db2ed187fec
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LojaB7Web\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LojaB7Web\\' => 
        array (
            0 => __DIR__ . '/../..' . '/pacotes/LojaB7Web',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38de20b2bad25fa4ed814db2ed187fec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38de20b2bad25fa4ed814db2ed187fec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
