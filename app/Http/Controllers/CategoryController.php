<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add()
    {
       return view('admin.Category.add');
    }

    public function store(Request $request){
        $category = new Category();
        $category->name =$request->name;

        $category->save();
        if ($category) {
        $notification=array(
            'message'=>'Category  Add Success',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);
        }
    }


    public function index()
    {
        $categories=Category::all();
        return view('admin.Category.index',compact('categories'));
    }

    public function delete($id){
        $delete = Category::find($id);
        $delete->delete();
        $notification=array(
            'message'=>'Category  Delete Success',
            'alert'=>'success'
        );
            return Redirect()->back()->with($notification);
    }

    public function edit($id){

        $category= Category::find($id);
         if (!is_null($category)) {
      return view('admin.category.edit', compact('category'));
       }else {
      return redirect()->route('all.category');
       }
    }

    public function update(Request $request,$id){
    $category = Category::find($id);
    $category->name =$request->name;
          $category->save();
            if ($category) {
                $notification=array(
                'message'=>'Category  Delete Success',
                'alert'=>'success'
               );
             return Redirect()->route('category')->with($notification);
        }
    }
}
