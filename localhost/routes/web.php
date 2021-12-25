<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$route->get('api/show' , 'AnimeController@ShowAll');

$route->get('api/show/{id}' , 'AnimeController@Show');

$router->post('api/add' , 'AnimeController@add');

$router->post('api/edit/{id}' , 'AnimeController@edit');

$router->delete('api/delete/{id}' , 'AnimeController@delete');
