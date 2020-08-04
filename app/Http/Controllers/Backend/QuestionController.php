<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Exam;
use App\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
     $questions = Question::all();
     return view('question.index', compact('questions'));

     /*return view('question.index',[
        'questions' => Question::all(),
     ]);*/
    }

    public function create(){
        $category = Category::all();
        return view('question.create', compact('category'));
    }

    public function store(Request $request, Exam $exams){
        $questions = Question::create($request->all());




        return view('question.create', compact('exams', 'questions'));
    }

    public function show(Question $question, Exam $exams){
        return view('question.show', compact('questions', 'exams'));

    }

    public function edit(Question $question){
        $category = Category::all();

        return view('question.create', compact('question', 'category'));
    }

    public function update(Request $request, Question $question){
        $question = Question::create($request->all());

        return back()->with('status', 'Acutalizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
