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

Auth::routes();

Route::get('/', function () {
    return view('/welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/quiz', 'QuizController@index');

Route::get('/new', 'QuizController@new');

Route::get('/new_error', 'QuizController@new_error');

Route::post('/create', 'QuizController@create');

Route::get('/list', 'QuizController@list');

Route::get('/edit/{id}', 'QuizController@edit');

Route::post('/update/{id}', 'QuizController@update');

Route::get('/delete/{id}', 'QuizController@destroy');
