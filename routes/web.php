<?php

$config = [
    'prefix' => 'admin',
    'namespace' => 'admin',
    'as' => 'admin.'
];

Route::group($config, function() {
    Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
    Route::post('/login', ['as' => 'login.store', 'uses' => 'LoginController@store']);
    Route::get('/logout', ['as' => 'login.logout', 'uses' => 'LoginController@logout']);

    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
    Route::resource('categories', 'CategoriesController');
    Route::resource('posts', 'PostsController');
});

$config = [
    'namespace' => 'theme'
];

Route::group($config, function() {
    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
    Route::get('/{category}', ['as' => 'category', 'uses' => 'CategoryController@index']);
});
