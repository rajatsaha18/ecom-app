<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;
    private $products;
    private $product;
    public function index(){
        $this->products = Product::orderBy('id', 'desc')->take(6)->get();

        return view('website.home.home',[

            'products' => $this->products,
        ]);
    }

    public function category($id){

        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('website.category.category',[

            'products' => $this->products,
        ]);
    }

    public function detail($id){
        $this->product = Product::find($id);
        return view('website.detail.product-detail',['product' => $this->product]);
    }

    public function myCart(){
        return view('website.cart.my-cart');
    }

    public function account()
    {
        return view('website.auth.account');
    }
}
