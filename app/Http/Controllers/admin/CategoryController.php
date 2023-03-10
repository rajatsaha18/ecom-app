<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    private $categories;
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function create(Request $request){
        Category::newCategory($request);
        return redirect('/manage-category')->with('message','Category add successfully');
    }
    public function manageCategory(){
        $this->categories = Category::all();
        return view('admin.category.manage-category',['categories' => $this->categories]);
    }

    public function edit($id){
        $this->category = Category::find($id);
        return view('admin.category.edit',['category' => $this->category]);
    }

    public function update(Request $request, $id){
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category Update Successfully');
    }

    public function delete($id){
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'Category delete Successfully');


    }

}
