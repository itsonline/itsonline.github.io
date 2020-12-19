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
Route::get('/inventarisbarang','InventarisController@inventaris');
Route::get('/datastaf', 'DataStafController@datastaf');
Route::get('/daftarberita', 'DaftarBeritaController@daftarberita');
Route::get('/penulisanberita', 'PenulisanBeritaController@penulisanberita');

Route::get('/inventarisbarang/tambahinventaris','InventarisController@tambahinventaris');

Route::post('/inventarisbarang/store','InventarisController@storeinventaris');

Route::get('/inventarisbarang/editinventaris/{id}','InventarisController@editinventaris');
Route::get('/datastaf/editdatastaf/{id}','DataStafController@editdatastaf');
Route::get('/daftarberita/editdaftarberita/{id}','DaftarBeritaController@editdaftarberita');

Route::post('/inventarisbarang/updateinventaris','InventarisController@updateinventaris');
Route::post('/datastaf/updatedatastaf','DataStafController@updatedatastaf');
Route::post('/daftarberita/updatedaftarberita','DaftarBeritaController@updatedaftarberita');

