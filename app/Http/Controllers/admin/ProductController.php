<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products;
    private $categories;
    private $product;
    public function addProduct(){
        $this->categories = Category::all();
        return view('admin.product.add-product',['categories' => $this->categories]);
    }
    public function create(Request $request){
        Product::newProduct($request);
        return redirect('/manage-product')->with('message');
    }
    public function manageProduct(){
        $this->products = Product::all();
        return view('admin.product.manage-product',['products' => $this->products]);
    }
}
