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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{kelas?}', 'MahasiswaController@index');

// Route::get('/mahasiswa/6A', 'MahasiswaController@kelasA');
// Route::get('/mahasiswa/6B', 'MahasiswaController@kelasB');
// Route::get('/mahasiswa/6C', 'MahasiswaController@kelasC');
// Route::get('/mahasiswa/6D', 'MahasiswaController@kelasD');

Route::get('/tambah','MahasiswaController@tambah');
Route::post('/mahasiswa/store','MahasiswaController@store');
Route::get('/mahasiswa/edit/{nim}','MahasiswaController@edit');
Route::post('/mahasiswa/update','MahasiswaController@update');
Route::get('/mahasiswa/hapus/{nim}','MahasiswaController@hapus');

Route::get('check_db', function () {
    try {
         DB::connection()->getPdo();
         return 'DB Connected';
     } catch (\Exception $e) {
         return 'DB Failed';
     }
 });
