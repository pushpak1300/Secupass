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
Route::get('/dashboard', 'AccountsController@dashboard')->middleware(['auth','verified']);
Route::resource('accounts', 'AccountsController')->except([
    'edit'
])->middleware('verified');
Route::resource('task', 'TasksController')->only([
    'destroy', 'store'
])->middleware('verified');
Route::resource('User','UserController')->only([
    'index', 'update'
])->middleware('verified');
Route::post('/search', 'AccountsController@search')->middleware('auth');
Auth::routes(['verify' => true]);
