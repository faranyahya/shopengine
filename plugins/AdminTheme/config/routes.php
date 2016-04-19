<?php
use Cake\Routing\Router;

Router::plugin(
    'AdminTheme',
    ['path' => '/admin-theme'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
