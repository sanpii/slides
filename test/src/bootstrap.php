<?php
declare(strict_types = 1);

use \Symfony\Component\Yaml\Yaml;
use \Silex\Provider\TwigServiceProvider;
use \Silex\Provider\WebProfilerServiceProvider;
use \Silex\Provider\UrlGeneratorServiceProvider;
use \Silex\Provider\HttpFragmentServiceProvider;
use \Silex\Provider\ServiceControllerServiceProvider;
use \PommProject\Silex\ServiceProvider\PommServiceProvider;
use \PommProject\Silex\ProfilerServiceProvider\PommProfilerServiceProvider;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new TwigServiceProvider);

if (class_exists('\Silex\Provider\WebProfilerServiceProvider')) {
    $app->register(new UrlGeneratorServiceProvider);
    $app->register(new ServiceControllerServiceProvider);
    $app->register(new HttpFragmentServiceProvider);

    $profiler = new WebProfilerServiceProvider();
    $app->register($profiler, [
        'profiler.cache_dir' => __DIR__ . '/../cache/profiler',
    ]);
    $app->mount('/_profiler', $profiler);
}

return $app;
