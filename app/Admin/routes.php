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
    //首页
    $router->get('/', 'HomeController@index');
    //先别信息
    $router->resource('line', 'LineController');
    //列车信息
    $router->resource('subway', 'SubwayController');
    //线别车辆信息
    $router->resource('lineSubway', 'LineSubwayController');
    //安装弓位信息
    $router->resource('position', 'PositionController');
    //下车原因信息
    $router->resource('reason', 'ReasonController');
    //批次信息
    $router->resource('lot', 'LotController');
    //供应商信息
    $router->resource('supplier', 'SupplierController');
    //商品信息
    $router->resource('brand', 'BrandController');
    //碳滑板信息
    $router->resource('carbon', 'CarbonController');
    //装车在用信息
    $router->resource('loading', 'LoadingController');
    //装车操作记录信息
    $router->resource('loading/log', 'LoadingLogController');
    //员工信息
    $router->resource('employee', 'EmployeeController');
    //员工角色信息
    $router->resource('employee/role', 'EmployeeRoleController');
});
