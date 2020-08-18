<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // page home
    public function home()
    {
        return view('index');
    }

    // page menu
    public function menu()
    {
        return view('menu');
    }

    // page about
    public function about()
    {
        return view('about');
    }
}
