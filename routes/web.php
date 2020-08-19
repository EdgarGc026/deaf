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

/* Ruta admin */
Route::resource('/categories', 'Backend\CategoryController');
Route::get('/categories/{id}/confirmDelete', 'Backend\CategoryController@confirmDelete');

Route::resource('/exams', 'Backend\ExamController');
Route::get('/exams/{id}/confirmDelete', 'Backend\ExamController@confirmDelete');

Route::resource('/exams/{exam}/questions', 'Backend\QuestionController');
/*Route::get('/exams/{exam}/questions', 'Backend\QuestionController@index');
Route::get('/exams/{exam}/questions/create', 'Backend\QuestionController@create')->name('question.create');
Route::get('/exams/{exam}/questions/{id}/edit', 'Backend\QuestionController@edit');

Route::put('/exams/{exam}/questions/{id}', 'Backend\QuestionController@update');
Route::post('/exams/{exam}/questions', 'Backend\QuestionController@store');*/

Auth::routes();

//Vista principal
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
