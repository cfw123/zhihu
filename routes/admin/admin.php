<?php


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // 用户登录显示
    Route::get('login', 'LoginController@index')->name('admin.login');
    // 用户登录处理
    Route::post('login', 'LoginController@login')->name('admin.login');

    // 定义后台主页路由
    Route::get('index', 'IndexController@index')->name('admin.index');
    Route::get('welcome', 'IndexController@welcome')->name('admin.welcome');
    // 用户退出
    Route::get('logout', 'IndexController@logout')->name('admin.logout');
});