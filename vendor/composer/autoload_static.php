<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita39903b522d0e9b0c6345b22038131a7
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '713b52c45daebafcea655af0c213c935' => __DIR__ . '/..' . '/panique/php-sass/sass-compiler.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'ScssPhp\\ScssPhp\\' => 16,
        ),
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTTP_Request2' => 
            array (
                0 => __DIR__ . '/..' . '/pear/http_request2',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Net_URL2' => __DIR__ . '/..' . '/pear/net_url2/Net/URL2.php',
        'PEAR_Exception' => __DIR__ . '/..' . '/pear/pear_exception/PEAR/Exception.php',
        'scss_formatter' => __DIR__ . '/..' . '/leafo/scssphp/classmap.php',
        'scss_formatter_compressed' => __DIR__ . '/..' . '/leafo/scssphp/classmap.php',
        'scss_formatter_crunched' => __DIR__ . '/..' . '/leafo/scssphp/classmap.php',
        'scss_formatter_nested' => __DIR__ . '/..' . '/leafo/scssphp/classmap.php',
        'scss_parser' => __DIR__ . '/..' . '/leafo/scssphp/classmap.php',
        'scss_server' => __DIR__ . '/..' . '/leafo/scssphp/classmap.php',
        'scssc' => __DIR__ . '/..' . '/leafo/scssphp/classmap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita39903b522d0e9b0c6345b22038131a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita39903b522d0e9b0c6345b22038131a7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita39903b522d0e9b0c6345b22038131a7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita39903b522d0e9b0c6345b22038131a7::$classMap;

        }, null, ClassLoader::class);
    }
}
