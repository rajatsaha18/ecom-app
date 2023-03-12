<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $categories;
    public function addProduct(){
        $this->categories = Category::all();
        return view('admin.product.add-product',['categories' => $this->categories]);
    }
    public function create(){

        return redirect('/manage-product')->with('message');
    }
    public function manageProduct(){
        return view('admin.product.manage-product');
    }
}
