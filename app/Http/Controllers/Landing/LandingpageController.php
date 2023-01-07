<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function home(){
        return view('landingpage.home.home');
    }

    public function checkout(){
        return view('landingpage.checkout.checkout');
    }
}
