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
Route::get('/','applicationcontroller@home');
Route::get('/dashboard', 'AccountsController@dashboard')->middleware('auth');
Route::resource('accounts', 'AccountsController')->except([
    'edit'
]);
Route::resource('task', 'TasksController')->only([
    'destroy', 'store'
]);
Route::resource('User','UserController')->only([
    'index', 'update'
]);
Route::post('/search', 'AccountsController@search')->middleware('auth');
Auth::routes(['verify' => true]);
