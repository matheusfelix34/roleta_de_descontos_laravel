<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


##################################### SISTEMA - CARTA DE SERVIÇO #####################################
//Route::get('medicos', ['uses' => 'medicosController@GetMedicos']);
Route::get('medicos', ['as'=>'medico_teste','uses' => 'medicosController@GetMedicos']);
Route::get('medicos/index', ['as'=>'medico_index','uses' => 'medicosController@index']);
//Route::get('roleta', ['as' => 'roleta_index', 'uses' => 'RoletaController@index']);


/*Route::get('adm/teste', ['as' => 'adm_teste',function(){
    return view('roleta/index');
}]);*/

// Route::get('adm/teste', ['as' => 'adm_teste',function(){
//     return view('roleta/index');
// }]);
//Route::get('index_roleta', 'RoletaController@index')->name('index_roleta');
//Route::get('index_roleta', 'RoletaController@index');
// Route::get('/index_roleta', function () {
//     return view('welcome');
// });