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


Route::group(['prefix' => 'vi'], function () {
    Route::get('/home-alt', 'Vi\HomeController@index')->name('vi.home.index');
    Route::get('/gioi-thieu', 'Vi\HomeController@introduce')->name('vi.home.introduce');
    Route::get('/thuc-don', 'Vi\HomeController@menu')->name('vi.home.menu');
    Route::get('/events-2', 'Vi\HomeController@event')->name('vi.home.event');
    Route::get('/hinh-anh', 'Vi\HomeController@image')->name('vi.home.image');
    Route::get('/tin-tuc-uu-dai', 'Vi\HomeController@news')->name('vi.home.news');
    Route::get('/lien-he', 'Vi\HomeController@contact')->name('vi.home.contact');
});
