<?php

namespace App\Http\Controllers\Backend;

use App\Exam;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamStoreRequest;
use App\Http\Requests\ExamUpdateRequest;

class ExamController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $exams = Exam::all()->where('user_id', auth()->user()->id);
        return view('exam.index', compact('exams'));
        /*        return view('exam.index', [
            'exams' => Exam::all()
        ]);*/
    }

    public function create(){

        return view('exam.create');
    }

    public function store(ExamStoreRequest $request){
        $exams = Exam::create([
            'user_id' => auth()->user()->id
        ] + $request->all());

        return redirect('/exams');
    }

    /*public function show(Exam $exam){
        return view('exam.show', compact('exam'));
    }*/

    public function edit($id){
        $exams = Exam::find($id);
        return view('exam.edit', compact('exams'));
        /*return view('exam.edit', [
            'exams' => $exams
            ]);*/
    }

    public function update(ExamUpdateRequest $request, $id){
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
