<?php

use Bramus\Router\Router;

$router = new Router();

// Config router
$router->setBasePath('/');

// Define routes
$router->get('health', fn() => http_response_code(200));

$router->get('items', "\App\Controllers\ItemsController@get");
$router->post('items', "\App\Controllers\ItemsController@create");
$router->get('items/{uuid}', "\App\Controllers\ItemsController@show");
$router->put('items/{uuid}', "\App\Controllers\ItemsController@edit");
$router->delete('items/{uuid}', "\App\Controllers\ItemsController@delete");

// Run router
$router->run();