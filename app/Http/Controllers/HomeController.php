<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         return view('pages.home');
    }

    public function about()
    {
         return view('pages.about');
    }

    public function testimonial()
    {
         return view('pages.testimonial');
    }

    
    public function contact()
    {
         return view('pages.contact');
    }

    
    public function shop()
    {
         return view('pages.shop');
    }
    
}
