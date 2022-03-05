<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function gallery(){
        return view('gallery');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
