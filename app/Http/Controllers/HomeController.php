<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;
    private $products;
    public function index(){
        $this->products = Product::orderBy('id', 'desc')->take(6)->get();
        $this->categories = Category::all();
        return view('website.home.home',[
            'categories' => $this->categories,
            'products' => $this->products,
        ]);
    }

    public function category(){
        return view('website.category.category');
    }

    public function detail(){
        return view('website.detail.product-detail');
    }

    public function myCart(){
        return view('website.cart.my-cart');
    }

    public function account()
    {
        return view('website.auth.account');
    }
}
