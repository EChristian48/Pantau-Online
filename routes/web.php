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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/guru', function () {
    return view('guru.index');
});

Route::group(['prefix'=>'murid'], function (){
    Route::get('/', function () {
        return view('murid.index');
    });
    Route::get('/data-diri', function () {
        return view('murid.datadiri');
    });
    Route::get('/jadwal', 'JadwalController@index')->name('jadwal.index');
    Route::post('/jadwal', 'JadwalController@store')->name('jadwal.store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
