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

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    return view('prueba');
});

Route::get('index', function () {
    return view('index');
});

Route::get('con_desempenho', function () {
    return view('con_desempenho');
});

Route::get('con_desem_consultor_rel', function () {
    return view('con_desem_consultor_rel');
});
Route::get('con_desem_cliente_rel', function () {
    return view('con_desem_cliente_rel');
});
Route::get('con_desem_consultor_graf', function () {
    return view('con_desem_consultor_graf');
});
Route::get('con_desem_consultor_pizza', function () {
    return view('con_desem_consultor_pizza');
});
Route::get('con_desempenho_aba_cliente', function () {
    return view('con_desempenho_aba_cliente');
});