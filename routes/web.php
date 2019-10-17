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

// Route::name('backoffice.')->middleware(['auth'])->group(function () {
//     Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard');
//     Route::prefix("master")->group(function () {
//         Route::prefix("users")->name('users.')->group(function () {
//             Route::get('/', 'Users\UsersController@index')->name('index');
//             Route::get('create', 'Users\UsersController@create')->name('create');
//             Route::get('edit/{id}', 'Users\UsersController@edit')->name('edit');
//             Route::post('create', 'Users\UsersController@store')->name('store');
//             Route::put('update/{id}', 'Users\UsersController@update')->name('update');
//             Route::post('destroy', 'Users\UsersController@destroy')->name('destroy');
//         });
//     });
// });
