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
Route::get('/')->uses('HomeController')->name('home.index');
Route::view('vibe', 'pages.vibe');

Route::group(['middleware' => ['auth', 'verified']], static function (): void {
    Route::get('/dashboard')->uses('DashboardController')->name('dashboard');

    Route::group(['prefix' => 'mood'], static function (): void {
        Route::get('')->uses('MoodsController@index')->name('mood.index');
        Route::post('')->uses('MoodsController@store')->name('mood.store');
        Route::get('create')->uses('MoodsController@create')->name('mood.create');
        Route::patch('{mood}')->uses('MoodsController@update')->name('mood.update');
        Route::delete('{mood}')->uses('MoodsController@destroy')->name('mood.destroy');
    });

    Route::group(['prefix' => 'account'], static function (): void {
        Route::get('')->uses('AccountController@index')->name('account.index');
        Route::post('')->uses('AccountController@store')->name('account.store');
    });
});

Route::view('maintenance', 'pages.maintenance')->name('maintenance');
Route::view('holding', 'pages.holding')->name('holding');

Route::group([], static function (): void {
    Route::get('login')->uses('Auth\LoginController@index')->name('login');
    Route::post('login')->uses('Auth\LoginController@store')->name('login.store');    
    Route::get('register')->uses('Auth\RegisterController@index')->name('register');
    Route::post('register')->uses('Auth\RegisterController@store')->name('register.store');
});