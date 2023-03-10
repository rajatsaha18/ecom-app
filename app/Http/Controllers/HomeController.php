<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.home.home');
    }

    public function detail(){
        return view('website.detail.product-detail');
    }

    public function myCart(){
        return view('website.cart.my-cart');
    }
}
