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
    return view('auth/login');
});

//buku
Route::get('buku', function () {
    return "halaman buku";
});

Route::get('buku/{id}', function ($id) {
    return "halaman detail buku " .$id;
});

Route::get('dashboard', function () {
    return view('dashboard/index');
});

//Route::resource('buku','bukuController');
Route::resource('buku','bukuController')->except(['delete','destroy']) ;


Route::get('master', function () {
    return view('template.master');
});




Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::resource('buku','bukuController');
    Route::get('databuku/edit/{id}','bukuController@edit');
    Route::post('databuku/update','bukuController@update');
    Route::get('databuku/destroy/{id}','bukuController@destroy');

    Route::get('/home', 'HomeController@index')->name('home');

    //jenis

    Route::resource('jenis','JenisController');
    Route::get('datajenis/editjenis/{id}','JenisController@edit');
    Route::post('datajenis/update','JenisController@update');
    Route::get('datajenis/destroy/{id}','JenisController@destroy');

    //transaksi
    Route::resource('transaksi','transaksiController');
    Route::get('datatransaksi/edittransaksi/{id}','transaksiController@edit');
    Route::post('datatransaksi/update','transaksiController@update');
    Route::get('datatransaksi/destroy/{id}','transaksiController@destroy');
});

