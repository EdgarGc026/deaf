<?php

namespace App\Http\Controllers\Backend;

use App\Answer;
use App\Category;
use App\Exam;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnswerStoreRequest;
use App\Http\Requests\AnswerUpdateRequest;
use App\Question;
use Illuminate\Http\Request;

  class AnswerController extends Controller{

  public function __construct(){
      $this->middleware('auth');
  }

  public function index($examId, $questionId){
    $exams = Exam::find($examId);
    $questions = Question::findOrFail($questionId);
    $answers = Answer::with($questionId);


    return view('answer.index', compact('exams', 'questions','answers'));
  }

  public function create($questionId, $examId){
      $exams = Exam::findOrFail($examId);
      $questions = Question::find($questionId);
      dd($exams);
      return view('answer.create', compact('exams', 'questions'));
  }

  public function store(AnswerStoreRequest $request, Exam $exams, $questionId){
    $answers = new Answer();
      $answers->description = $request->get('description');
      $answers->iframe = $request->get('iframe');
      $answers->image = $request->get('image');
      $answers->is_correct = $request->get('is_correct');
      $answers->question_id = $questionId;

      $answers->save();
      return redirect()->route('answers.index', ['exam' => $exams->id, 'questionId' =>  $answers->question_id]);
  }

  public function edit($examId, $questionId, $answerId){
    $exams = Exam::findOrFail($examId);
    $questions = Question::find($questionId);
    $answers = Answer::find($answerId);

    return view();
  }

  public function update(AnswerUpdateRequest $request ,$answerId, $questionId){
    $answers = Answer::find($answerId);

    $answers->description = $request->get('description');
    $answers->iframe = $request->get('iframe');
    $answers->image = $request->get('image');
    $answers->is_correct = $request->get('is_correct');
    $answers->question_id = $questionId;

    return redirect()->route('answers.index');
  }

  public function destroy($examId,$questionId, $answerId){
    $exams = Exam::find($examId);
    $questions = Question::find($questionId);
    $answers = Answer::find($answerId);
    $answers->delete();

    return redirect()->route('answers.destroy', $answers->question_id);
  }

  public  function confirmDelete($examId, $questionId, $id){
      $exams = Exam::find($examId);
      $questions = Question::find($questionId);
      $answers = Answer::find($id);

      return view('answer.confirmDelete', compact('exams', 'questions', 'answers'));
  }

  }
/*.
    $isCorrect = Answer::where('is_correct', 1)->get();
    $isWrong = Answer::where('is_correct', 0)->get();
  */
