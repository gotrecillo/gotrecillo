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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@contact')->name('contact-process');
Route::get('/portfolio', 'ProjectController@index')->name('portfolio.index');
Route::get('/portfolio/{portfolio}', 'ProjectController@show')->name('portfolio.show');
Route::get('/{slug}', 'PageController@index')->name('page');

Route::group([
    'middleware' => ['web', 'admin'],
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'namespace' => 'Admin',
], function () {
    CRUD::resource('technology', 'TechnologyCrudController');
    CRUD::resource('project', 'ProjectCrudController');
});
