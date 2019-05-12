<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
//use Controllers\test\TestController;
use Controllers\Test01\TestController;

return function (App $app) {
    $container = $app->getContainer();

//    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
//        // Sample log message
//        $container->get('logger')->info("Slim-Skeleton '/' route");
//
//        // Render index view
//        return $container->get('renderer')->render($response, 'index.phtml', $args);
//    });

    $app->group('/test',
        function($app) {
            $this->get('/', function (Request $request, Response $response, array $args) {
                return $response->withJson([test=>'']);
            });
            $this->get('/test', function (Request $request, Response $response, array $args) {
                return $response->withJson([test=>'test']);
            });
            $this->get('/hello', TestController::class.':hello');
            $this->get('/user/{id}', TestController::class.':saveUser');
        }
    );
};
