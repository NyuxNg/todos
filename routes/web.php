<?php

use Illuminate\Http\Request;

// Route::middleware('auth')->group(function(){
    Route::resource('/todos', 'TodoController');
    Route::put('/todos/complete/{todo}', 'TodoController@complete')->name('todos.complete');
    Route::delete('/todos/uncomplete/{todo}', 'TodoController@uncomplete')->name('todos.uncomplete');
// });



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

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
