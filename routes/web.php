<?php

use Illuminate\Support\Facades\Route;

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


/////route for tenanta

$router->group(['middleware' => 'auth'], function($router){
    
Route::get('/home', 'HomeController@index')->name('home');

Route::Resource('/rent-pay','RentPayController');
Route::get('/logout', 'Auth\LoginController@logout');

});
























///route for landlord



Route::group(['middleware' => ['auth', 'admin']], function() {

    Route::Resource('/dashboard','SuperAdminController');
    Route::Resource('/rent-history','RentHistoryController');
    Route::get('search-history','SearchController@index');
 
 });
