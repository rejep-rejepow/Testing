<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Parentt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('Category.index')->with([
            'categories'=>$categories,
        ]);
    }

    public function create(){
        $parent=Parentt::all();
        return view('Category.create')->with([
            'parent' => $parent,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route('categories')->with([
            'success'=>' '.$category->name.' created',
        ]);
    }
    public function edit($category_id){
        $category= Category::findOrFail($category_id);
        return view('Category.edit')->with([
            'category'=>$category,
        ]);
    }

    public function update($category_id,Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        $category = Category::findOrFail($category_id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories')->with([
            'success'=>'редактирование категории',
        ]);
    }
}
