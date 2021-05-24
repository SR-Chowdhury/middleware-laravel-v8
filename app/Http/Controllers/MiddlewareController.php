<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    public function index() {
        return view('main_page');
    }
    public function about() {
        return view('about');
    }
    public function category() {
        return view('category');
    }
    public function blog() {
        return view('blog');
    }
    public function contact() {
        return view('contact');
    }
}
