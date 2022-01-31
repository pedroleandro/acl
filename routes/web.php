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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/user', 'UserController');

Route::get('/role/{role}/permissions', 'RoleController@permissions')->name('role.permissions');
Route::put('/role/{role}/permissions/sync', 'RoleController@sync')->name('role.permissions.sync');
Route::resource('/role', 'RoleController');

Route::resource('/permission', 'PermissionController');
