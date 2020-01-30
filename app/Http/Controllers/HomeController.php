<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function contact() {
        return view('contact');
    }

    public function shop() {
        return view('shop');
    }

    public function shopShow() {
        return view('product');
    }

    public function checkout() {
        return view('checkout');
    }
    
    public function cart() {
        return view('cart');
    }

    public function orders() {
        return view('orders');
    }
}
