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

//Route::get('/', function () {
//    return view('awal', 'AwalController@index')->name('awal');
//});
Route::get('/', 'AwalController@index')->name('index');
route::get('/awal/detail/{id}', 'AwalController@detail');
route::get('/listawal','AwalController@list');
//Route::get('about', 'AwalController@about')->name('about');
//Route::get('post/{id}', 'AwalController@singlePost')->name('singlePost');
//Route::get('contact', 'AwalController@contact')->name('contact');

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kegiatan','KegiatanController@index');

Route::middleware(['verified'])->group(function() {

Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

route::resource('masjid','MasjidController');
route::resource('kegiatan','KegiatanController');
});
//Route::middleware(['verified'])->group(function() {
//    Route::resource('masjids','MasjidController');
 //});

