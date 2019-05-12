<?php

namespace Controllers\Test01;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class TestController
{

    /**
     * @var \Interop\Container\ContainerInterface
     */
    protected $container;

    /**
     * BaseController constructor.
     *
     * @param \Interop\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function hello(Request $request, Response $response)
    {
        return $response->withJson([test=>'hello']);
    }

}