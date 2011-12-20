<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

$app = new Application();

$app->get('/', function() use ($app) {
    return new Response('OK.', 200);
});

$app->error(function (\Exception $e) use ($app) {
    $status = 500;
    $content = 'ERROR: ' . $e->getMessage();

    return new Response($content, $status);
});

return $app;