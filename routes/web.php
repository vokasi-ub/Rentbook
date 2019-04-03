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


Route::get('kategori', function () {
    return "halaman kategori";
});

Route::get('kategori/{id}', function ($id) {
    return "halaman detail kategori " .$id;
});

Route::get('dashboard', function () {
    return view('dashboard/index');
});

//Route::resource('kategori','KategoriController');
Route::resource('kategori','KategoriController')->except(['delete','destroy']) ;


Route::get('master', function () {
    return view('template.master');
});


Route::resource('kategori','KategoriController');

Route::get('datakategori/edit/{id}','KategoriController@edit');
Route::post('datakategori/update','KategoriController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
