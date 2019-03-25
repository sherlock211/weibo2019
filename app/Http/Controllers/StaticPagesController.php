<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        return view('static_pages_home');
    }

    public function help(){
        return view('static_pages_help');
    }

    public function about(){
        return view('static_pages_about');
    }
    //
}
