<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'UsersFind',
    ['path' => '/users-find'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
