<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe7f21737a9e2e32315c82280cf8e2ea
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

        spl_autoload_register(array('ComposerAutoloaderInitfe7f21737a9e2e32315c82280cf8e2ea', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe7f21737a9e2e32315c82280cf8e2ea', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe7f21737a9e2e32315c82280cf8e2ea::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}