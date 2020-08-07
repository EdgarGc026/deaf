<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('category.index', compact('categories'));
    }

    public function create(){

        return view('category.create');
    }

    public function store(CategoryStoreRequest $request){
        $category = Category::create($request->all());

        return redirect('/categories');
    }

    public function show($id){
        $category = Category::find($id);

        return view('category.show', compact('category'));
    }

    public function edit($id){
        $category = Category::find($id);

        return view('category.edit',[
            'category' => $category
        ]);
    }

    public function update(CategoryUpdateRequest $request, $id){
        $category = Category::find($id);
        $category->update($request->all());
        $category->save();

        return redirect('/categories');
    }

    public  function confirmDelete($id){
        $category = Category::find($id);

        return view('category.confirmDelete', [
            'category' => $category
        ]);
    }

    public function destroy($id){
        $category = Category::find($id)->delete();
        return redirect('/categories');
    }

}
