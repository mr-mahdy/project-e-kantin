<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Payment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countPayment = Payment::all()->count();
        $countPaymentF = Payment::where('status', '=', 0)->count();
        $totalPayment = Order::all()->sum('sub_total');
        return view('home', compact('countPayment', 'totalPayment', 'countPaymentF'));
    }
}
