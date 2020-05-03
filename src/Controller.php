<?php

declare(strict_types=1);

namespace Icosillion\SlimControllers;

use Slim\App;

/**
 * This class provides a base for all controllers, allowing actions to be dispatched to the appropriate
 * methods. Additionally this class gives access to Slim and the current Request and Response contexts.
 */
abstract class Controller
{
    /**
     * @var App
     */
    protected $app;

    /**
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    /**
     * This method allows use to return a callable that calls the action for
     * the route.
     *
     * @param string $actionName Name of the action method to call
     * @return \Closure
     */
    public function __invoke($actionName)
    {
        $controller = $this;

        return function ($request, $response, $args) use ($controller, $actionName) {
            return $controller->$actionName($request, $response, $args);
        };
    }
}
