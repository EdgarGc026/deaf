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

    public function create(Exam $exams){
        $category = Category::all();
        return view('question.create', compact('exams','category'));
    }

    public function store(Request $request){
        $questions = Question::create($request->all());

        return back()->with('status', 'Creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
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
