<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc09087b5627c20e4715ba89b3c8cca48
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitc09087b5627c20e4715ba89b3c8cca48::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
