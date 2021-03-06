<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c3f42428fd709a4084eeb8ef77d9858
{
    public static $files = array (
        'ff7894500c5b71c8fce0fc097492b542' => __DIR__ . '/../..' . '/Application.php',
        'd84988e3b647af51d9283f06710502ff' => __DIR__ . '/../..' . '/Model.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mvc\\models\\' => 11,
            'mvc\\controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mvc\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'mvc\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c3f42428fd709a4084eeb8ef77d9858::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c3f42428fd709a4084eeb8ef77d9858::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
