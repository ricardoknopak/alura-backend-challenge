<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use Illuminate\Support\Facades\DB;

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
    dd(DB::getPDO());
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'receitas'], function () use ($router) {
        $router->get('', 'ReceitasController@index');
        $router->get('/descricao/{descricao}', 'ReceitasController@findByName');
        $router->get('{id:[\d]+}', 'ReceitasController@show');
        $router->post('', 'ReceitasController@store');
        $router->put('{id:[\d]+}', 'ReceitasController@update');
        $router->delete('{id:[\d]+}', 'ReceitasController@destroy');
    });
    $router->group(['prefix' => 'despesas'], function () use ($router) {
        $router->get('', 'DespesasController@index');
        $router->get('/descricao/{descricao}', 'DespesasController@findByName');
        $router->get('{id:[\d]+}', 'DespesasController@show');
        $router->post('', 'DespesasController@store');
        $router->put('{id:[\d]+}', 'DespesasController@update');
        $router->delete('{id:[\d]+}', 'DespesasController@destroy');
    });
});
