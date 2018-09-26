<?php

// definição das rotas da api
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', 'AuthController@login'); // define rota usada para realizar login via api
    Route::post('logout', 'AuthController@logout'); // define rota usada para realizar logout via api
});
