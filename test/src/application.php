<?php
declare(strict_types = 1);

use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

$app = require __DIR__ . '/bootstrap.php';

$app->get('/', function(Request $request) use($app) {
    return new JsonResponse([]);
});

return $app;
