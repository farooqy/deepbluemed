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
function comingsoon()
{
    return view('admin.comingsoon.comingsoon');
}

Route::get('/', 'main\IndexPageController@openIndexPage')->name('indexPage');
Route::get('/news', 'main\IndexPageController@openNewsIndexPage')->name('newsIndexPage');
Route::get('/news', 'main\IndexPageController@openAboutUsPage')->name('newsIndexPage');
Route::get('/services', 'main\IndexPageController@openServiceIndexPage')->name('newsIndexPage');

//Admin
Route::get('/admin', 'admin\mainController@openIndexPage')->name('adminIndexPage');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('home/newbanner', function(){return comingsoon();});
    Route::get('home/list', function(){return comingsoon();});

    Route::get('products/new', function(){return comingsoon();});
    Route::get('products/list', function(){return comingsoon();});
    Route::get('products/list/disabled', function(){return comingsoon();});

    Route::get('services/new', function(){return comingsoon();});
    Route::get('services/list', function(){return comingsoon();});
    Route::get('services/disabled', function(){return comingsoon();});


    Route::get('news/new', function(){return comingsoon();});
    Route::get('news/published', function(){return comingsoon();});

    Route::get('feedback', function(){return comingsoon();});
    Route::get('feedback/seen', function(){return comingsoon();});

});
