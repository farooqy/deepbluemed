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

Route::get('/', 'main\IndexPageController@openIndexPage')->name('indexPage');
Route::get('/news', 'main\IndexPageController@openNewsIndexPage')->name('newsIndexPage');
Route::get('/news', 'main\IndexPageController@openAboutUsPage')->name('newsIndexPage');
Route::get('/services', 'main\IndexPageController@openServiceIndexPage')->name('newsIndexPage');
