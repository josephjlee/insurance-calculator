<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28ee8238dac9e2b40dcf873c4d8887cc
{
    public static $classMap = array (
        'Calculator\\Controllers\\Calc' => __DIR__ . '/../..' . '/src/Calc.php',
        'Calculator\\Percentage\\BasePerc' => __DIR__ . '/../..' . '/src/BasePerc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit28ee8238dac9e2b40dcf873c4d8887cc::$classMap;

        }, null, ClassLoader::class);
    }
}
