<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutContreller extends Controller
{
    public function index(Request $request)
    {
        return view('pages.checkout');
    }

    public function success(Request $request){
        return view('pages.success');
    }
}
