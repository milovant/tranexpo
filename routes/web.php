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

Route::get('/', 'HomeController@getFrontPage');
Auth::routes();

Route::get('/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});



Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->middleware('web')->group(function () {
    Route::resource('users', 'UserController');
    Route::resource('pages', 'PageController');
});
