<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbe9508e8be6ad04321a7fa3dd1987e14
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbe9508e8be6ad04321a7fa3dd1987e14', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbe9508e8be6ad04321a7fa3dd1987e14', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbe9508e8be6ad04321a7fa3dd1987e14::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
