<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
//use Controllers\test\TestController;
use Controllers\Test01\TestController;

return function (App $app) {
    $container = $app->getContainer();
    $auth = $app->getContainer()->get('auth');

//    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
//        // Sample log message
//        $container->get('logger')->info("Slim-Skeleton '/' route");
//
//        // Render index view
//        return $container->get('renderer')->render($response, 'index.phtml', $args);
//    });

    $app->group('/test',
        function() use ($app, $auth) {
            $app->get('/', function (Request $request, Response $response, array $args) {
                return $response->withJson([test=>'']);
            });
            $app->get('/test', function (Request $request, Response $response, array $args) {
                return $response->withJson([test=>'test']);
            });
            $app->get('/hello', TestController::class.':hello')->add($auth);
            $app->get('/user/{id}', TestController::class.':saveUser');
        }
    );
    $app->group('/api',
        function($app) {
            $this->get('/auth/login', function (Request $request, Response $response, array $args) {
                return $response->withJson([id=>'keke']);
            });
        }
    );
};
