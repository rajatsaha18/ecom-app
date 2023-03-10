<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function manageProduct(){
        return view('admin.product.manage-product');
    }
}
