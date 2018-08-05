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
    return view('layouts.app');
});


Route::get('/first-task', 'FirstController@first_task')->name('first-task');
Route::get('/second-task', 'FirstController@second_task')->name('second-task');
Route::get('/third-task', 'FirstController@third_task')->name('third-task');
Route::get('/fourth-task', 'FirstController@fourth_task')->name('fourth-task');
Route::get('/fifth-task', 'FirstController@fifth_task')->name('fifth-task');
Route::get('/sixth-task', 'FirstController@sixth_task')->name('sixth-task');
Route::get('/seventh-task', 'FirstController@seventh_task')->name('seventh-task');
Route::get('/eighth-task', 'FirstController@eighth_task')->name('eighth-task');
Route::get('/nineth-task', 'FirstController@nineth_task')->name('nineth-task');
Route::get('/first-db-task', 'DBTaskController@first_db_task')->name('first-db-task');
Route::get('/second-db-task', 'DBTaskController@second_db_task')->name('second-db-task');
Route::get('/third-db-task', 'DBTaskController@third_db_task')->name('third-db-task');
Route::get('/fourth-db-task', 'DBTaskController@fourth_db_task')->name('fourth-db-task');
Route::get('/fifth-db-task', 'DBTaskController@fifth_db_task')->name('fifth-db-task');