<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    private $categories;
    public function addCategory(Request $request){
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
        $this->categories = Category::newCategory($request);
        return view('admin.category.add-category',['categories'=> $this->categories]);
    }
    public function manageCategory(){
        return view('admin.category.manage-category');
    }

}
