<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ1_0_4_alpha
{
    public static $classMap = array (
        'Automattic\\Jetpack\\Jetpack_Mu_Wpcom' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/class-jetpack-mu-wpcom.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ1_0_4_alpha::$classMap;

        }, null, ClassLoader::class);
    }
}
