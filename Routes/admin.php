<?php

// CRUD bao gồm: Danh sách, thêm, sửa, xem, xóa
// User:
//      GET     -> USER/INDEX   -> INDEX    -> Danh sách
//      GET     -> USER/CREATE  -> CREATE   -> HIỂN THỊ FORM THÊM MỚI
//      POST    -> USER/STORE   -> STORE    -> LƯU DỮ LIỆU TỪ FORM THÊM MỚI VÀO DB
//      GET     -> USER/ID      -> SHOW ($id)     -> XEM CHI TIẾT
//      GET     -> USER/ID/EDIT -> EDIT ($id)     -> HIỂN THỊ FORM CẬP NHẬT
//      POST    -> USER/ID/UPDATE      -> UPDATE ($id)   -> LƯU DỮ LIỆU TỪ FORM CẬP NHẬT VÀO DB
//      POST    -> USER/ID/DELETE      -> DELETE ($id)   -> XÓA BẢN GHI TRONG DB

use Admin\Project3005\Controllers\Admin\CategoryController;
use Admin\Project3005\Controllers\Admin\ProductController;
use Admin\Project3005\Controllers\Admin\DashboardController;
use Admin\Project3005\Controllers\Admin\UserController;
$router->before('GET|POST', '/admin/*.*', function() {

    if (!is_logged()) {
        header('location: ' . url('login') );
        exit();
    } 

    if (!is_admin()) {
        header('location: ' . url() );
        exit();
    }
    
});
$router->mount('/admin', function () use ($router) {
    $router->get('/', DashboardController::class . '@dashboard');
    // CRUD Product
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');
        $router->get('/create',         ProductController::class . '@create');
        $router->post('/store',         ProductController::class . '@store');
        $router->get('/{id}/show',      ProductController::class . '@show');
        $router->get('/{id}/edit',      ProductController::class . '@edit');
        $router->post('/{id}/update',   ProductController::class . '@update');
        $router->get('/{id}/delete',    ProductController::class . '@delete');
    });
    //CRUD Categories
    $router->mount('/categories', function () use ($router) {
        $router->get('/',               CategoryController::class . '@index');
        $router->get('/create',         CategoryController::class . '@create');
        $router->post('/store',         CategoryController::class . '@store');
        $router->get('/{id}/edit',      CategoryController::class . '@edit');
        $router->post('/{id}/update',   CategoryController::class . '@update');
        $router->get('/{id}/delete',    CategoryController::class . '@delete');
    });
    //CRUD Users
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');
        $router->get('/create',         UserController::class . '@create');
        $router->post('/store',         UserController::class . '@store');
        $router->get('/{id}/show',      UserController::class . '@show');
        $router->get('/{id}/edit',      UserController::class . '@edit');
        $router->post('/{id}/update',   UserController::class . '@update');
        $router->get('/{id}/delete',    UserController::class . '@delete');
    });
});
