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
        // dd($data);
        return view('landingpage.checkout.checkout',compact('provinsi','data','subtotal'));
    }
    public function getongkir(Request $request){
        // dd($request->all());
        $weight = array_sum($request->wgt);
        $ongkir = RajaOngkir::ongkosKirim([
            'origin'        => 342,     // ID kota/kabupaten asal
            'destination'   => $request->dis,      // ID kota/kabupaten tujuan
            'weight'        => $weight,    // berat barang dalam gram
            'courier'       => $request->dev,    // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();
        dd($ongkir);
        return response()->json($ongkir[0]);
    }
}
