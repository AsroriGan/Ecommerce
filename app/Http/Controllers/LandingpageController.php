<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function home(){
        return view('landingpage.home.home');
    }
}
