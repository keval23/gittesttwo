<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Auth::routes();

Route::group(['middleware' => ['web','auth','admin'], 'namespace'=>'Admin'], function () {
    try
    {
        Route::get('/', 'HomeController@index')->name('admin.home');
        Route::get('/user', 'UserController@index')->name('admin.user.list');
        Route::post('/user/create', 'UserController@create')->name('admin.user.create');
        Route::get('/user/{id}', 'UserController@read')->name('admin.user.edit');
        Route::put('/user/{id}', 'UserController@update')->name('admin.user.update');
        Route::delete('/user/{id}', 'UserController@delete')->name('admin.user.destroy');    
    }
    catch (\Exception $e)
    {
        dd($e->getMessage());
    }
});