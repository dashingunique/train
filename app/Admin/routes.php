<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->get('system/subway/chose', 'SubwayController@chose');
    $router->resource('system/line', 'LineController');
    $router->resource('system/subway', 'SubwayController');
    $router->resource('system/lineSubway', 'LineSubwayController');
    $router->resource('system/position', 'PositionController');
    $router->resource('system/reason', 'ReasonController');
    $router->resource('system/lot', 'LotController');
    $router->resource('system/carbon', 'CarbonController');
    $router->resource('system/up', 'UpController');
    $router->resource('system/down', 'DownController');
});
