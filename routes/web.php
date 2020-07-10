<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// pertanyaan route
Route::middleware('auth')->get('/pertanyaan', 'PertanyaanController@index');
Route::middleware('auth')->post('/pertanyaan', 'PertanyaanController@store');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('question', 'QuestionController');
    Route::resource('answer', 'AnswerController');
});
