<?php

include __DIR__ . "/../vendor/autoload.php";

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

$app = new Application();

$app->post("/", function (Request $request) {
    return strtoupper($request->getContent());
});

$app->run();