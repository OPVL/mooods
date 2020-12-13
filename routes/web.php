<?php

use App\Http\Controllers\HomeController;
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

Route::get('/')->uses(HomeController::class)->name('home.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


Route::group(['prefix' => 'mood'], function (): void {
    Route::get('')->uses('MoodController@index')->name('mood.index');
    Route::get('create')->uses('MoodController@create')->name('mood.create');
    Route::get('')->uses('MoodController@index')->name('mood.index');
});

Route::group(['prefix' => 'account'], function (): void {
    Route::get('')->uses('AccountController@index')->name('account.index');
    Route::post('')->uses('AccountController@store')->name('account.store');
});