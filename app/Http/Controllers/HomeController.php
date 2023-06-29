<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class HomeController extends Controller
{
    public function index(Request $request){
        $items=TravelPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items'=>$items
        ]);
    }

    public function tesmonial(Request $request){
        return view('pages.tesmonial');
    }
     public function travelpackage(Request $request){
        return view('pages.travelpackage');
    }

    public function visa(Request $request){
        return view('pages.visa');
    }
     public function passport(Request $request){
        return view('pages.passport');
    }
}
