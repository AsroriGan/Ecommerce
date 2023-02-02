<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function home(){
        $data=Slider::all();
        return view('landingpage.home.home', compact('data'));
    }

    public function checkout(){
        $rajaOngkir = new RajaOngkir('isi_API_key_Anda_disini');
        return view('landingpage.checkout.checkout');
    }
}
