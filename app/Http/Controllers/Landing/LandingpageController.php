<?php

namespace App\Http\Controllers\Landing;

use App\Models\Slider;
use Cart;
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
        $userId = auth()->user()->id;
        $data =  \Cart::session($userId)->getContent();
        $subtotal = \Cart::getSubTotal();
        return view('landingpage.checkout.checkout',compact('provinsi','data','subtotal'));
    }
    public function getongkir(Request $request){
        dd($request->all());
        $ongkir = RajaOngkir::ongkosKirim([
            'origin'        => 342,     // ID kota/kabupaten asal
            'destination'   => 255,      // ID kota/kabupaten tujuan
            'weight'        => 1000,    // berat barang dalam gram
            'courier'       => 'jne'    // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();
        dd($ongkir);
    }
}
