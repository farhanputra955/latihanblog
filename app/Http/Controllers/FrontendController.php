<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Film;

class FrontendController extends Controller
{
    public function blog(){
        return view('frontend.blog');
    }

    public function film(){
        return view('frontend.film');
    }
}
