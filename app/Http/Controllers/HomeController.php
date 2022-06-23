<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// We created a Controller through php artisan.
class HomeController extends Controller
{
    // Index Page
    public function index(){
        return view('welcome');
    }

    // Index Page
    public function about(){
        return view('about');
    }

    // Index Page
    public function contact(){
        return view('contact');
    }

}
