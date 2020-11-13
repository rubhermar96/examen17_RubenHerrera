<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ed55f2e51f04ae21f058cd05d58716f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SujalPatel\\IntToEnglish\\' => 24,
        ),
        'B' => 
        array (
            'Ballen\\Distical\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SujalPatel\\IntToEnglish\\' => 
        array (
            0 => __DIR__ . '/..' . '/sujalpatel/inttoenglish/src',
        ),
        'Ballen\\Distical\\' => 
        array (
            0 => __DIR__ . '/..' . '/ballen/distical/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ed55f2e51f04ae21f058cd05d58716f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ed55f2e51f04ae21f058cd05d58716f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ed55f2e51f04ae21f058cd05d58716f::$classMap;

        }, null, ClassLoader::class);
    }
}