<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ1_5_0
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

        spl_autoload_register(array('ComposerAutoloaderInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ1_5_0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ1_5_0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ1_5_0::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        return $loader;
    }
}
