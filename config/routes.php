<?php

return $routes = [
    'GET' => [
        '/' => 'HomeController@index',
        '/ping' => 'HealthCheckController@ping',
    ],
    'POST' => [],
];
