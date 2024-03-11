<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;
use App\Admin\Controllers;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->get('helpers/routes', [Controllers\RouteController::class, 'index']);

    $router->prefix('/example')->group(function(){
        Route::get('/media-player', [Controllers\ExampleController::class, 'mediaPlayer']);
        Route::get('/media-player/{id}', [Controllers\ExampleController::class, 'mediaPlayerShow']);
    });

});
