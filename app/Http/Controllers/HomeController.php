<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('static_pages.home');
    }
    public function homes()
    {
        return view('static_pages.homes');
    }
}
