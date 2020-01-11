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
/*
$router->get('/', function () use ($router) {
    return $router->app->version();
});
*/

// Première route, la home (accueil)

$router->get('/', [
        'as' => 'home',
        'uses'=> 'MainController@homePage'
]);

// 2ème route, la route admin

$router->get('/admin', [
        'as' => 'admin',
        'uses' => 'MainController@adminPage'
]);