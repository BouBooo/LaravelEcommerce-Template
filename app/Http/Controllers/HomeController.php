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
}
