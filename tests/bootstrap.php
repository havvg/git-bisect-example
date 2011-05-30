<?php

define('SILEX_DIR', __DIR__ . '/../vendor/silex');

require_once SILEX_DIR . '/vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();

$loader->registerNamespaces(array(
    'Symfony' => SILEX_DIR . '/vendor',
    'Silex' => SILEX_DIR . '/src',
    'Monolog' => SILEX_DIR . '/vendor/monolog/src',
    'Bisect\\Test' => __DIR__,
));
$loader->registerPrefixes(array(
    'Pimple' => SILEX_DIR .'/vendor/pimple/lib',
    'Twig_' => SILEX_DIR . '/vendor/twig/lib',
));

$loader->registerNamespaceFallback(array(
    __DIR__ . '/../src',
));
$loader->registerPrefixFallback(array(
    __DIR__ . '/../src',
));

$loader->register();