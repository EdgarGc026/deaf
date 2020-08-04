<?php

namespace App\Http\Controllers\Backend;

use App\Exam;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class ExamController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('exam.index', [
            'exams' => Exam::all()
        ]);
    }

    public function create(){

        return view('exam.create');
    }

    public function store(Request $request){
        $exams = Exam::create([
            'user_id' => auth()->user()->id
        ] + $request->all());

        return redirect('/exams');
    }

    public function show(Exam $exam){
//        return view('exam.show', compact('exam'));
    }

    public function edit($id){
        $exams = Exam::find($id);
        return view('exam.edit', [
            'exams' => $exams
            ]);
    }

    public function update(Request $request, $id){
        $exams = Exam::find($id);
        $exams->update($request->all());
        $exams->save();

        return redirect('/exams');
    }

    public function destroy($id){
        $exams = Exam::find($id);
        $exams->delete();

        return redirect('/exams');
    }

    public function confirmDelete($id){
        $exams = Exam::find($id);
        return view('exam.confirmDelete', [
            'exams' => $exams
        ]);
    }
}
