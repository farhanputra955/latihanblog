<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Film;
use App\Fashionpria;
use App\Fashionwanita;

class FrontendController extends Controller
{
    public function blog(){
        return view('frontend.blog');
    }

    public function fashionpria(){
        return view('frontend.fashionpria');
    }

    public function fashionwanita(){
        return view('frontend.fashionwanita');
    }

    public function film(){
        return view('frontend.film');
    }
}
