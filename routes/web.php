<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
/*Route::resource('exams', 'ExamController');*/
/*DB::listen(function ($e){
  dump($e->sql);
});

Route::resources([
  'exams'       => 'Backend\ExamController',
  'categories'  => 'Backend\CategoryController',
  'questions'   => 'Backend\QuestionController',
  'answers'     => 'Backend\AnswerController'
]);

Route::get('exams/{id}/confirmDelete', 'Backend\ExamController@confirmDelete')
  ->name('exams.confirmDelete');
Route::get('questions/{id}/confirmDelete', 'Backend\QuestionController@confirmDelete')
  ->name('questions.confirmDelete');
Route::get('categories/{id}/confirmDelete', 'Backend\CategoryController@confirmDelete')
  ->name('categories.confirmDelete');
Route::get('answers/{id}/confirmDelete', 'Backend\AnswerController@confirmData')
  ->name('answers.confirmDelete');*/


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

Route::get('/exams/{exam}/questions/{question}/answers',
  ['as' => 'answers.index', 'uses' => 'Backend\AnswerController@index']);

Route::get('/exams/{exam}/questions/{question}/answers/create',
  ['as' => 'answers.create', 'uses' => 'Backend\AnswerController@create']);

Route::post('/exams/{exam}/questions/{question}/answers',
  ['as' => 'answers.store', 'uses' => 'Backend\AnswerController@store']);

Route::get('/exams/{exam}/questions/{question}/answers/{id}/edit',
  ['as' => 'answers.edit', 'uses' => 'Backend\AnswerController@edit']);

Route::put('/exams/{exam}/questions/{question}/answers/{id}',
  ['as' => 'answers.update', 'uses' => 'Backend\AnswerController@update']);

Route::delete('/exams/{exam}/questions/{question}/answers/{id}',
  ['as' => 'answers.destroy' , 'uses' => 'Backend\AnswerController@destroy']);

Route::get('/exams/{exam}/questions/{question}/answers/{id}/confirmDelete',
  ['as' => 'answers.confirmDelete', 'uses' => 'Backend\AnswerController@confirmDelete']);


Auth::routes();
//Vista principal
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
