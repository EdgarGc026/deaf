<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Exam;
use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Question;
use App\Http\Controllers\Controller;
use function GuzzleHttp\Promise\all;

class QuestionController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($id){
        $exams = Exam::find($id);
        $questions = Question::all();

        return view('question.index', compact( 'questions', 'exams'));
    }

    public function create($id){
        $exams = Exam::find($id);
        $category = Category::orderBy('id', 'ASC')->get();

        return view('question.create', compact('category', 'exams'));
    }

    public function store(QuestionStoreRequest $request, $id){
        $exams = Exam::find($id);
        $questions = new Question();
        $questions->description = $request->get('description');
        $questions->iframe = $request->get('iframe');
        $questions->image = $request->get('image');

        $questions->exam_id = $request->get('exam_id');
        $questions->category_id = $request->get('category_id');

        $questions->save();
        return redirect()->route('questions.index', $exams->id);
        /*return view('question.index', compact('exams'));*/
    }

    public function edit($id){

        return view('question.edit', compact('questions', 'category' ,'exams'));
    }

    public function update(QuestionUpdateRequest $request, $id){
        $questions = Question::find($id);

        return view('question.index', compact('category', 'questions'));
    }

    /*public function show(Question $question, Exam $exams){
        return view('question.show', compact('questions', 'exams'));
    }



    public function destroy($id){

    }*/
}
