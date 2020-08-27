<?php

namespace App\Http\Controllers\Backend;

use App\Answer;
use App\Category;
use App\Exam;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index($examId, $id){
        $exams = Exam::findOrFail($examId);
        $questions = Question::find($id);
        $answers = Answer::all();

        return view('answer.index', compact('exams', 'questions', 'answers'));
    }

    public function create($examId, $questionId){
        $exams = Exam::find($examId);
        $questions = Question::find($questionId);

        return view('answer.create', compact('exams', 'questions'));
    }

    public function store(Request $request, $questionId){
        $answers = new Answer;
        $answers->description = $request->get('description');
        $answers->iframe = $request->get('iframe');
        $answers->image = $request->get('image');

        $answers->question_id = $questionId;
        $answers->Save();

        return redirect()->route('answers.index', $answers->question_id);
    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

    public  function confirmDelete($examId, $questionId, $answerId){
        $exams = Exam::find($examId);
        $questions = Question::find($questionId);
        $answers = Answer::find($answerId);

        return view('answer.confirmDelete', compact('exams', 'questions', 'answers'));
    }

}
