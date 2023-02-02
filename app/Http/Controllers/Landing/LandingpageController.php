<?php

namespace App\Http\Controllers\Landing;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class LandingpageController extends Controller
{
    public function home(){
        $data=Slider::all();
        return view('landingpage.home.home', compact('data'));
    }

    public function checkout(){
        $provinsi = RajaOngkir::provinsi()->all();
        return view('landingpage.checkout.checkout',compact('provinsi'));
    }
}
