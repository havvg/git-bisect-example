<?php

require_once __DIR__ . '/../app/autoload.php';

$app = require __DIR__ . '/../app/app.php';
$app->register(new Silex\Extension\HttpCacheExtension(), array(
    'http_cache.cache_dir' => __DIR__ . '/../app/cache/',
));
$app['http_cache']->run();
