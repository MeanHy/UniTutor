<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49eecab1c650149ccd957a06d0c9e6e9
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Huyle\\User\\Providers\\' => 21,
            'Huyle\\User\\Database\\Seeders\\' => 28,
            'Huyle\\User\\Database\\Migrations\\' => 31,
            'Huyle\\User\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Huyle\\User\\Providers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Providers',
        ),
        'Huyle\\User\\Database\\Seeders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/seeders',
        ),
        'Huyle\\User\\Database\\Migrations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/migrations',
        ),
        'Huyle\\User\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Huyle\\Roles\\Models\\Role' => __DIR__ . '/../..' . '/src/Models/Role.php',
        'Huyle\\Roles\\Providers\\RoleServiceProvider' => __DIR__ . '/../..' . '/src/Providers/UserServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49eecab1c650149ccd957a06d0c9e6e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49eecab1c650149ccd957a06d0c9e6e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49eecab1c650149ccd957a06d0c9e6e9::$classMap;

        }, null, ClassLoader::class);
    }
}
