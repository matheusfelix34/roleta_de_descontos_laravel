<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


////////////////////////////////////// Sistema Roleta ////////////////////////////////////
Route::get('medicos', ['as'=>'medico_teste','uses' => 'medicosController@GetMedicos']);
Route::get('medicos/index', ['as'=>'medico_index','uses' => 'medicosController@index']);