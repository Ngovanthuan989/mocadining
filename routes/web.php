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
    return redirect()->route('vi.home.index');
});


Route::group(['prefix' => 'vi'], function () {
    Route::get('/home-alt', 'Vi\HomeController@index')->name('vi.home.index');
    Route::get('/gioi-thieu', 'Vi\HomeController@introduce')->name('vi.home.introduce');
    Route::get('/thuc-don', 'Vi\HomeController@menu')->name('vi.home.menu');
    Route::get('/events-2', 'Vi\HomeController@event')->name('vi.home.event');
    Route::get('/hinh-anh', 'Vi\HomeController@image')->name('vi.home.image');
    Route::get('/tin-tuc-uu-dai', 'Vi\HomeController@news')->name('vi.home.news');
    Route::get('/lien-he', 'Vi\HomeController@contact')->name('vi.home.contact');

    Route::group(['prefix' => 'gallery_item'], function () {
        Route::get('/sorae-feature-touches', 'Vi\GalleryItemController@soraeFeatureTouches')->name('vi.gallery_item.sorae_feature_touches');
        Route::get('/private-rooms', 'Vi\GalleryItemController@privateRooms')->name('vi.gallery_item.private_rooms');
        Route::get('/excusive-event', 'Vi\GalleryItemController@excusiveEvent')->name('vi.gallery_item.excusive_event');

    });
});


Route::group(['middleware' => ['check.login']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/login', 'Admin\LoginController@login')->name('admin.login');
        Route::post('/postLogin', 'Admin\LoginController@postLogin')->name('admin.postLogin');
        Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    });
});

Route::group(['middleware' => ['check.logout']], function () {
    Route::get('/admin/index', 'Admin\DashboardController@index')->name('admin.index');

    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'introduce'], function () {
            Route::get('/create', 'Admin\IntroduceController@create')->name('admin.introduce.create');
            Route::get('/', 'Admin\IntroduceController@index')->name('admin.introduce.show');
            Route::get('/edit/{id}', 'Admin\IntroduceController@edit')->name('admin.introduce.edit');
            Route::post('/update', 'Admin\IntroduceController@update')->name('admin.introduce.update');
            Route::post('/delete', 'Admin\IntroduceController@delete')->name('admin.introduce.delete');
            Route::post('/addPost', 'Admin\IntroduceController@addPost')->name('admin.introduce.addPost');
        });

        Route::group(['prefix' => 'menu'], function () {
            Route::get('/create', 'Admin\MenuController@create')->name('admin.menu.create');
            Route::get('/', 'Admin\MenuController@index')->name('admin.menu.show');
            Route::get('/edit/{id}', 'Admin\MenuController@edit')->name('admin.menu.edit');
            Route::post('/update', 'Admin\MenuController@update')->name('admin.menu.update');
            Route::post('/delete', 'Admin\MenuController@delete')->name('admin.menu.delete');
            Route::post('/addPost', 'Admin\MenuController@addPost')->name('admin.menu.addPost');
        });

        Route::group(['prefix' => 'event'], function () {
            Route::get('/create', 'Admin\EventController@create')->name('admin.event.create');
            Route::get('/', 'Admin\EventController@index')->name('admin.event.show');
            Route::get('/edit/{id}', 'Admin\EventController@edit')->name('admin.event.edit');
            Route::post('/update', 'Admin\EventController@update')->name('admin.event.update');
            Route::post('/delete', 'Admin\EventController@delete')->name('admin.event.delete');
            Route::post('/addPost', 'Admin\EventController@addPost')->name('admin.event.addPost');
        });

        Route::group(['prefix' => 'catalog-image'], function () {
            Route::get('/create', 'Admin\CatalogImageController@create')->name('admin.catalogImages.create');
            Route::get('/', 'Admin\CatalogImageController@index')->name('admin.catalogImages.show');
            Route::get('/edit/{id}', 'Admin\CatalogImageController@edit')->name('admin.catalogImages.edit');
            Route::post('/update', 'Admin\CatalogImageController@update')->name('admin.catalogImages.update');
            Route::post('/delete', 'Admin\CatalogImageController@delete')->name('admin.catalogImages.delete');
            Route::post('/addPost', 'Admin\CatalogImageController@addPost')->name('admin.catalogImages.addPost');
        });

        Route::group(['prefix' => 'image'], function () {
            Route::get('/create', 'Admin\ImageController@create')->name('admin.image.create');
            Route::get('/', 'Admin\ImageController@index')->name('admin.image.show');
            Route::get('/edit/{id}', 'Admin\ImageController@edit')->name('admin.image.edit');
            Route::post('/update', 'Admin\ImageController@update')->name('admin.image.update');
            Route::post('/delete', 'Admin\ImageController@delete')->name('admin.image.delete');
            Route::post('/addPost', 'Admin\ImageController@addPost')->name('admin.image.addPost');
        });
    });
});
