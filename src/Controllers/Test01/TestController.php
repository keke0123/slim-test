<?php

namespace Controllers\Test01;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

use Models\User;

class TestController
{

    /**
     * @var \Interop\Container\ContainerInterface
     */
    protected $container;
    /** @var \Illuminate\Database\Capsule\Manager */
    protected $db;

    /**
     * BaseController constructor.
     *
     * @param \Interop\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->db = $container->get('db');
    }

    public function hello(Request $request, Response $response)
    {
        $response->getBody()->write(' Hello ');
        return $response;
    }

    public function saveUser(Request $request, Response $response, array $args)
    {
//        $user = new User;
//        $user->name = 'John';
//        $user->age = 28;
//        $user->save();
        $users = new User;
        $users = User::find(1);
        print_r($users);
        return $response;
//        return $response->withJson(var_dump($users));
//        foreach ($users as $user) {
//            var_dump($user->name);
//        }
//        return $response->withJson([id=>$args['id']]);
    }

}