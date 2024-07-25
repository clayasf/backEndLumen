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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// $router->get('/cep', function(){
//     return response()->json(['status' =>true]);
// });

$router->get('/cep/{id}', 'CepController@show');
$router->get('/cepp', 'CepController@index');

$router->get('/historico', 'HistoricoController@index');
$router->post('/historico/cadastrar', 'HistoricoController@store');