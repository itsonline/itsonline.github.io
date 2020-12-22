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
//READ
Route::get('/inventarisbarang','InventarisController@inventaris');
Route::get('/inventarisbarangredaktur','InventarisController@inventarisredaktur');
Route::get('/inventarisbarangkorlip','InventarisController@inventariskorlip');
Route::get('/inventarisbarangpemred','InventarisController@inventarispemred');

Route::get('/datastaf', 'DataStafController@datastaf');
Route::get('/datastafredaktur', 'DataStafController@datastafredaktur');
Route::get('/datastafkorlip', 'DataStafController@datastafkorlip');
Route::get('/datastafpemred', 'DataStafController@datastafpemred');

Route::get('/daftarberita', 'DaftarBeritaController@daftarberita');
Route::get('/daftarberitaredaktur', 'DaftarBeritaController@daftarberitaredaktur');
Route::get('/daftarberitakorlip', 'DaftarBeritaController@daftarberitakorlip');
Route::get('/daftarberitapemred', 'DaftarBeritaController@daftarberitapemred');

Route::get('/penulisanberita', 'PenulisanBeritaController@penulisanberita');
Route::get('/penulisanberitaredaktur', 'PenulisanBeritaController@penulisanberitaredaktur');
Route::get('/penulisanberitakorlip', 'PenulisanBeritaController@penulisanberitakorlip');
Route::get('/penulisanberitapemred', 'PenulisanBeritaController@penulisanberitapemred');

Route::get('/beritasetiapstaf', 'BeritaSetiapStafController@beritasetiapstaf');
Route::get('/beritasetiapstafredaktur', 'BeritaSetiapStafController@beritasetiapstafredaktur');
Route::get('/beritasetiapstafkorlip', 'BeritaSetiapStafController@beritasetiapstafkorlip');
Route::get('/beritasetiapstafpemred', 'BeritaSetiapStafController@beritasetiapstafpemred');

Route::get('/beritapublish', 'BeritaPublishController@beritapublish');
Route::get('/beritapublishredaktur', 'BeritaPublishController@beritapublishredaktur');
Route::get('/beritapublishkorlip', 'BeritaPublishController@beritapublishkorlip');
Route::get('/beritapublishpemred', 'BeritaPublishController@beritapublishpemred');

//CREATE
Route::get('/inventarisbarang/tambahinventaris','InventarisController@tambahinventaris');
Route::get('/inventarisbarangredaktur/tambahinventarisredaktur','InventarisController@tambahinventarisredaktur');
Route::get('/inventarisbarangkorlip/tambahinventariskorlip','InventarisController@tambahinventariskorlip');
Route::get('/inventarisbarangpemred/tambahinventarispemred','InventarisController@tambahinventarispemred');

Route::get('/penulisanberita/tambahpenulisanberita','PenulisanBeritaController@tambahpenulisanberita');
Route::get('/penulisanberitaredaktur/tambahpenulisanberitaredaktur','PenulisanBeritaController@tambahpenulisanberitaredaktur');
Route::get('/penulisanberitakorlip/tambahpenulisanberitakorlip','PenulisanBeritaController@tambahpenulisanberitakorlip');
Route::get('/penulisanberitapemred/tambahpenulisanberitapemred','PenulisanBeritaController@tambahpenulisanberitapemred');

Route::get('/beritapublish/tambahberitapublish','BeritaPublishController@tambahberitapublish');
Route::get('/beritapublishredaktur/tambahberitapublishredaktur','BeritaPublishController@tambahberitapublishredaktur');
Route::get('/beritapublishkorlip/tambahberitapublishkorlip','BeritaPublishController@tambahberitapublishkorlip');
Route::get('/beritapublishpemred/tambahberitapublishpemred','BeritaPublishController@tambahberitapublishpemred');

Route::get('/daftarberitakorlip/tambahdaftarberitakorlip','DaftarBeritaController@tambahdaftarberitakorlip');

Route::get('/beritasetiapstafpemred/tambahberitasetiapstafpemred','BeritaSetiapStafController@tambahberitasetiapstafpemred');

Route::get('/datastafpemred/tambahdatastafpemred','DataStafController@tambahdatastafpemred');
//CREATE 2

Route::post('/inventarisbarang/store','InventarisController@storeinventaris');
Route::post('/inventarisbarangredaktur/storeredaktur','InventarisController@storeinventarisredaktur');
Route::post('/inventarisbarangkorlip/storekorlip','InventarisController@storeinventariskorlip');
Route::post('/inventarisbarangpemred/storepemred','InventarisController@storeinventarispemred');

Route::post('/penulisanberita/store','PenulisanBeritaController@storepenulisanberita');
Route::post('/penulisanberitaredaktur/storeredaktur','PenulisanBeritaController@storepenulisanberitaredaktur');
Route::post('/penulisanberitakorlip/storekorlip','PenulisanBeritaController@storepenulisanberitakorlip');
Route::post('/penulisanberitapemred/storepemred','PenulisanBeritaController@storepenulisanberitapemred');

Route::post('/beritapublish/store','BeritaPublishController@storeberitapublish');
Route::post('/beritapublishredaktur/storeredaktur','BeritaPublishController@storeberitapublishredaktur');
Route::post('/beritapublishkorlip/storekorlip','BeritaPublishController@storeberitapublishkorlip');
Route::post('/beritapublishpemred/storepemred','BeritaPublishController@storeberitapublishpemred');

Route::post('/daftarberitakorlip/storekorlip','DaftarBeritaController@storedaftarberitakorlip');

Route::post('/beritasetiapstafpemred/storepemred','BeritaSetiapStafController@storeberitasetiapstafpemred');

Route::post('/datastafpemred/storepemred','DataStafController@storedatastafpemred');
//UPDATE
Route::get('/inventarisbarang/editinventaris/{id}','InventarisController@editinventaris');
Route::get('/inventarisbarangredaktur/editinventarisredaktur/{id}','InventarisController@editinventarisredaktur');
Route::get('/inventarisbarangkorlip/editinventariskorlip/{id}','InventarisController@editinventariskorlip');
Route::get('/inventarisbarangpemred/editinventarispemred/{id}','InventarisController@editinventarispemred');

Route::get('/datastaf/editdatastaf/{id}','DataStafController@editdatastaf');
Route::get('/datastafredaktur/editdatastafredaktur/{id}','DataStafController@editdatastafredaktur');
Route::get('/datastafkorlip/editdatastafkorlip/{id}','DataStafController@editdatastafkorlip');
Route::get('/datastafpemred/editdatastafpemred/{id}','DataStafController@editdatastafpemred');

Route::get('/daftarberita/editdaftarberita/{id}','DaftarBeritaController@editdaftarberita');
Route::get('/daftarberitaredaktur/editdaftarberitaredaktur/{id}','DaftarBeritaController@editdaftarberitaredaktur');
Route::get('/daftarberitakorlip/editdaftarberitakorlip/{id}','DaftarBeritaController@editdaftarberitakorlip');

Route::get('/penulisanberita/editpenulisanberita/{id}','PenulisanBeritaController@editpenulisanberita');
Route::get('/penulisanberitaredaktur/editpenulisanberitaredaktur/{id}','PenulisanBeritaController@editpenulisanberitaredaktur');
Route::get('/penulisanberitakorlip/editpenulisanberitakorlip/{id}','PenulisanBeritaController@editpenulisanberitakorlip');
Route::get('/penulisanberitapemred/editpenulisanberitapemred/{id}','PenulisanBeritaController@editpenulisanberitapemred');

Route::get('/beritapublish/editberitapublish/{id}','BeritaPublishController@editberitapublish');
Route::get('/beritapublishredaktur/editberitapublishredaktur/{id}','BeritaPublishController@editberitapublishredaktur');
Route::get('/beritapublishkorlip/editberitapublishkorlip/{id}','BeritaPublishController@editberitapublishkorlip');
Route::get('/beritapublishpemred/editberitapublishpemred/{id}','BeritaPublishController@editberitapublishpemred');

Route::get('/beritasetiapstafpemred/editberitasetiapstafpemred/{id}','BeritaSetiapStafController@editberitasetiapstafpemred');
//UPDATE 2
Route::post('/inventarisbarang/updateinventaris','InventarisController@updateinventaris');
Route::post('/inventarisbarangredaktur/updateinventarisredaktur','InventarisController@updateinventarisredaktur');
Route::post('/inventarisbarangkorlip/updateinventariskorlip','InventarisController@updateinventariskorlip');
Route::post('/inventarisbarangpemred/updateinventarispemred','InventarisController@updateinventarispemred');

Route::post('/datastaf/updatedatastaf','DataStafController@updatedatastaf');
Route::post('/datastafredaktur/updatedatastafredaktur','DataStafController@updatedatastafredaktur');
Route::post('/datastafkorlip/updatedatastafkorlip','DataStafController@updatedatastafkorlip');
Route::post('/datastafpemred/updatedatastafpemred','DataStafController@updatedatastafpemred');

Route::post('/daftarberita/updatedaftarberita','DaftarBeritaController@updatedaftarberita');
Route::post('/daftarberitaredaktur/updatedaftarberitaredaktur','DaftarBeritaController@updatedaftarberitaredaktur');
Route::post('/daftarberitakorlip/updatedaftarberitakorlip','DaftarBeritaController@updatedaftarberitakorlip');

Route::post('/penulisanberita/updatepenulisanberita','PenulisanBeritaController@updatepenulisanberita');
Route::post('/penulisanberitaredaktur/updatepenulisanberitaredaktur','PenulisanBeritaController@updatepenulisanberitaredaktur');
Route::post('/penulisanberitakorlip/updatepenulisanberitakorlip','PenulisanBeritaController@updatepenulisanberitakorlip');
Route::post('/penulisanberitapemred/updatepenulisanberitapemred','PenulisanBeritaController@updatepenulisanberitapemred');

Route::post('/beritapublish/updateberitapublish','BeritaPublishController@updateberitapublish');
Route::post('/beritapublishredaktur/updateberitapublishredaktur','BeritaPublishController@updateberitapublishredaktur');
Route::post('/beritapublishkorlip/updateberitapublishkorlip','BeritaPublishController@updateberitapublishkorlip');
Route::post('/beritapublishpemred/updateberitapublishpemred','BeritaPublishController@updateberitapublishpemred');

Route::post('/beritasetiapstafpemred/updateberitasetiapstafpemred','BeritaSetiapStafController@updateberitasetiapstafpemred');
//DELETE
Route::get('/penulisanberita/hapus/{id}','PenulisanBeritaController@hapuspenulisanberita');
Route::get('/penulisanberitaredaktur/hapusredaktur/{id}','PenulisanBeritaController@hapuspenulisanberitaredaktur');
Route::get('/penulisanberitakorlip/hapuskorlip/{id}','PenulisanBeritaController@hapuspenulisanberitakorlip');
Route::get('/penulisanberitapemred/hapuspemred/{id}','PenulisanBeritaController@hapuspenulisanberitapemred');

Route::get('/datastafpemred/hapuspemred/{id}','DataStafController@hapusdaftarstafpemred');

Route::get('/beritasetiapstafpemred/hapuspemred/{id}','BeritaSetiapStafController@hapusberitasetiapstafpemred');
