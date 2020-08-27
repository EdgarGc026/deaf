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
Route::get('/exams/{exam}/questions/{id}/edit', function ($examId, $questionId){})
    ->name('questions.edit');
Route::get('/exams/{exam}/questions/{id}', function ($examId, $questionId){})
    ->name('questions.show');
Route::get('/exams/{exam}/questions/{id}/confirmDelete', 'Backend\QuestionController@confirmDelete')
    ->name('questions.confirmDelete');


Route::resource('/exams/{exam}/questions/{question}/answers', 'Backend\AnswerController');
Route::get('/exams/{exam}/questions/{id}/answers',
  function ($questionId){})
  ->name('answers.index');

Route::get('/exams/{exam}/questions/{question}/answers/{id}/confirmDelete',
    'Backend\AnswerController@confirmDelete')
    ->name('answers.confirmDelete');


Auth::routes();
//Vista principal
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
