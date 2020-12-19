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
Route::get('/inventarisbarang','InventarisController@index');

Route::get('/inventarisbarang/tambahinventaris','InventarisController@tambahinventaris');

Route::post('/inventarisbarang/store','InventarisController@store');

Route::get('/inventarisbarang/editinventaris/{id}','InventarisController@editinventaris');
