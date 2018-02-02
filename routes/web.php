<?php

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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('perpus',  ['uses' => 'PerpusController@showAll']);
  
    $router->get('perpus/{id}', ['uses' => 'PerpusController@showByID']);
  
    $router->post('perpus', ['uses' => 'PerpusController@create']);
  
    $router->delete('perpus/{id}', ['uses' => 'PerpusController@delete']);
  
    $router->put('perpus/{id}', ['uses' => 'PerpusController@update']);
  });
