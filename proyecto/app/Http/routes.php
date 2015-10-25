<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('controlador','prueba@hi');
Route::get('/','login@index');



Route::get('hi/{nombre}', function ($nombre) {
    return ('No Mames!'.$nombre);
});
