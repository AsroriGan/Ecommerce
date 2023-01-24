<?php

namespace App\Http\Controllers\Landing;

use App\Models\BannerPromo;
use App\Models\promo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function promo(){
        $data = promo::all();
        $data1 = promo::all()->first();
        // dd($data1);
        $data2 = promo::where('id','>',$data1->id)->first();
        $data3 = promo::all()->last();
        $banner = BannerPromo::where('id', '=', 1)->firstOrFail();
        return view('landingpage.promo.promo', compact('data', 'banner','data1','data2','data3'));
    }
}
