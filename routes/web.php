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

Route::group(['prefix' => 'sitio'], function() {
	Route::get('/{ciudad?}', 'Frontend\SiteController@portada')->name('portada');
	Route::get('/', 'Frontend\SiteController@portada')->name('_portada');
	Route::get('/{ciudad}/ofertas/{oferta}', 'Frontend\SiteController@detalle')->name('detalle');
	Route::get('/{ciudad}/recientes', 'Frontend\SiteController@recientes')->name('recientes');
	Route::get('/{page?}', 'Frontend\SiteController@page')->name('page');
});
