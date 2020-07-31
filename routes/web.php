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

//Ruta admin
Route::resource('/exams', 'Backend\ExamController');
Route::get('/exams/{id}/confirmDelete', 'Backend\ExamController@confirmDelete');
Route::get('/exams/{exam}', 'Backend\ExamController@show');

Route::resource('/questions', 'Backend\QuestionController');
Route::get('/exams/{exam}/questions/create', 'Backend\QuestionController@create');

Auth::routes();
//Vista principal
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home')
    ->middleware('auth');
