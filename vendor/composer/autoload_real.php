<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit390c81018765a3a467e80cc60b167ccd
=======
class ComposerAutoloaderInit61f144f300310ab9a356596b3c6047c0
>>>>>>> f05463ace1701ceada1fd1586a4f69508d487008
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit390c81018765a3a467e80cc60b167ccd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit390c81018765a3a467e80cc60b167ccd', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit61f144f300310ab9a356596b3c6047c0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit61f144f300310ab9a356596b3c6047c0', 'loadClassLoader'));
>>>>>>> f05463ace1701ceada1fd1586a4f69508d487008

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInit390c81018765a3a467e80cc60b167ccd::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInit61f144f300310ab9a356596b3c6047c0::getInitializer($loader));
>>>>>>> f05463ace1701ceada1fd1586a4f69508d487008
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInit390c81018765a3a467e80cc60b167ccd::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInit61f144f300310ab9a356596b3c6047c0::$files;
>>>>>>> f05463ace1701ceada1fd1586a4f69508d487008
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequire390c81018765a3a467e80cc60b167ccd($fileIdentifier, $file);
=======
            composerRequire61f144f300310ab9a356596b3c6047c0($fileIdentifier, $file);
>>>>>>> f05463ace1701ceada1fd1586a4f69508d487008
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire390c81018765a3a467e80cc60b167ccd($fileIdentifier, $file)
=======
function composerRequire61f144f300310ab9a356596b3c6047c0($fileIdentifier, $file)
>>>>>>> f05463ace1701ceada1fd1586a4f69508d487008
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
