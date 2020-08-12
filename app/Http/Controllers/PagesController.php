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

    // page about
    public function about()
    {
        return view('about');
    }
}
