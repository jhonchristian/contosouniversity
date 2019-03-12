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
    return view('home');
});

// Students Controller
//Route::resource('students', 'StudentsController');
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::post('/students', 'StudentsController@store');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::put('/students/{student}', 'StudentsController@update');
Route::get('/students/{student}', 'StudentsController@show');
// End of Students Controller