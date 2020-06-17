<?php

use App\Http\Controllers\ProductController;
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
    return view('index');
});

Route::resource('produtos', 'ProductController');

Route::resource('categorias', 'CategoryController');

Route::resource('clientes', 'ClientController');

Route::get('/categorias/editar/{id}', 'CategoryController@edit');
Route::get('/categorias/excluir/{id}', 'CategoryController@destroy');
Route::post('/categorias/{id}', 'CategoryController@update');
