<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function manageCategory(){
        return view('admin.category.manage-category');
    }
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function manageProduct(){
        return view('admin.product.manage-product');
    }

}
