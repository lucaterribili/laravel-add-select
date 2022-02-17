<?php

namespace lucaterribili\LaravelAddSelect\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return ['lucaterribili\LaravelAddSelect\ServiceProvider'];
    }
}
