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

Auth::routes();

Route::get('/home', 'NavigationController@index')->name('home');

Route::get('/property-listings', 'NavigationController@toToPropertyList')->name('property-listings');
Route::get('/property-single', 'NavigationController@toToPropertySingle')->name('property-single');
Route::get('/agents', 'NavigationController@toAgents')->name('agents');
Route::get('/agent-single', 'NavigationController@toAgentSingle')->name('agent-single');
Route::get('/contact-us', 'NavigationController@toContact')->name('contact-us');