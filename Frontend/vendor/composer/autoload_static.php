<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccb8c0623276044fb84cbcbffaae004e
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NLPCloud\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NLPCloud\\' => 
        array (
            0 => __DIR__ . '/..' . '/nlpcloud/nlpcloud-client/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/httpful/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitccb8c0623276044fb84cbcbffaae004e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccb8c0623276044fb84cbcbffaae004e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitccb8c0623276044fb84cbcbffaae004e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitccb8c0623276044fb84cbcbffaae004e::$classMap;

        }, null, ClassLoader::class);
    }
}
