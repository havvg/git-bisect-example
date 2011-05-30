<?php

namespace Bisect\Test;

use Silex\WebTestCase;

abstract class AbstractTest extends WebTestCase
{
    public function createApplication()
    {
        return require __DIR__ . '/../app/app.php';
    }

    protected function getApplication()
    {
        return $this->app;
    }
}