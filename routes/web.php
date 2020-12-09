<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cadastro');
});


Route::get('/cadastro', 'App\Http\Controllers\Cadastro_webController@create');
Route::post('/cadastro', 'App\Http\Controllers\Cadastro_webController@store')->name('cadastrar');


