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


Route::get('todos', 'todosController@index');
Route::get('todos/{todo}', 'todosController@show');
Route::get('nav-todo', 'todosController@create');
Route::post('todo-store', 'todosController@store');

Route::get('/todos/{todo}/edit', 'todosController@edit');
Route::post('/todos/{todo}/todo-update', 'todosController@update');

Route::get('/todos/{todo}/delete' , 'todosController@destroy');

Route::get('todos/{todo}/complete' , 'todosController@complete');